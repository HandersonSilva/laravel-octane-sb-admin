<?php

namespace App\Repositories;

use App\Enums\StatusMessage;
use App\Interfaces\Repositories\RepositoryInterface;
use Illuminate\Support\Facades\DB;

class AbstractRepository implements RepositoryInterface
{
    protected $model;
    protected $relationShip = [];
    protected $colunas = [];

    public function __construct($model)
    {
        $this->model = $model;
    }

    //Método responsável por recuperar todos os objetos
    public function allObject()
    {
        try {
            return $this->model::all();
        } catch (\Exception $e) {
            \Log::error('Error ' . $e->getMessage());
            return false;
        }
    }

    //Método responsável por criar um objeto um objeto
    public function createObject($data)
    {
        DB::beginTransaction();
        try {
            $object = $this->model::create($data);
            if (count($this->relationShip)) {
                for ($i = 0; $i < count($this->relationShip); $i++) {
                    switch ($this->relationShip[$i]) {
                        case $this->relationShip[$i][0] == 'OneToMany':
                            $method = $this->relationShip[$i][1];
                            $object->$method()->createMany($data[$this->relationShip[$i][1]]);
                            break;
                        case $this->relationShip[$i][0] == 'ManToMany':
                            $method = $this->relationShip[$i][1];
                            $object->$method()->attach($data[$this->relationShip[$i][1]]);
                            break;
                    }
                }
            }
            DB::commit();
            return $object;
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Error ' . $e->getMessage());
            throw $e;
        }
    }

    //Método responsável por buscar um objeto um objeto
    public function findObject($id)
    {
        try {
            /*
            ** caso id não exista irá cair no catch. se usasse o método find dá
            ** problema informando que não pode deletar um dado null e não caía no catch
            */
            return $this->model::findOrFail($id);
        } catch (\Exception $e) {
            \Log::error('Error ' . $e->getMessage());
            throw $e;
        }
    }

    //Método responsável por salvar as alterações de um objeto
    public function updateObject($id, $data)
    {
        DB::beginTransaction();
        try {
            $object = $this->model::findOrFail($id);
            $object->update($data);

            if ($object && count($this->relationShip)) {
                for ($i = 0; $i < count($this->relationShip); $i++) {
                    switch ($this->relationShip[$i]) {
                        case $this->relationShip[$i][0] == 'OneToMany':
                            $method = $this->relationShip[$i][1];
                            $object->$method()->delete();
                            $object->$method()->createMany($data[$this->relationShip[$i][1]]);
                            break;
                        case $this->relationShip[$i][0] == 'ManToMany':
                            $method = $this->relationShip[$i][1];
                            $object->$method()->sync($data[$this->relationShip[$i][1]]);
                            break;
                    }
                }
            }
            DB::commit();
           // $object->refresh();//caso queria atualizar o objeto com os novos relacionamentos adicionado
            return $object;
        } catch (\Exception $e) {
            \Log::error('Error ' . $e->getMessage());
            throw $e;
        }
    }

    //Método responsável por ativar ou inativar um objeto
    public function inactiveOrActiveObject($id)
    {
        try {
            /*
            ** caso id não exista irá cair no catch. se usasse o método find dá
            ** problema informando que não pode deletar um dado null e não caía no catch
            */
            $objectFind = $this->model::findOrFail($id);

            $objectFind->ativo = $objectFind->ativo == "S" ? "N" : "S";

            return $objectFind->save();

        } catch (\Exception $e) {
            \Log::error('Error ' . $e->getMessage());
            return false;
        }
    }

    //Método responsável por deletar um objeto usando softdelete do laravel
    public function deleteObject($id)
    {
        try {
            /*
            ** caso id não exista irá cair no catch. se usasse o método find dá
            ** problema informando que não pode deletar um dado null e não caía no catch
            */
            $this->model::findOrFail($id)->delete();

            return $this->redirectBack(StatusMessage::MSG_SUCCESS_DELETE);

        } catch (\Exception $e) {
            \Log::error('Error ' . $e->getMessage());
            return abort(500);
        }
    }

    /*Método responsável por recuperar os objetos
    **com base nos filtros
    */
    public function searchObject($filters)
    {
        try {
            return $this->model->search($filters);
        } catch (\Exception $e) {
            \Log::error('Error ' . $e->getMessage());
            return false;
        }
    }

    //Método responsável por clonar um objeto
    public function replicateObject($id)
    {
        try {
            /*
            ** caso id não exista irá cair no catch. se usasse o método find dá
            ** problema informando que não pode deletar um dado null e não caía no catch
            */
            $newObject = $this->model::findOrFail($id)->replicate();

            //colocado esses campos apenas para ficar como exemplos de possibilidades
            if (isset($newObject->nome))
                $newObject->nome = $newObject->nome . ' - COPIA';

            if (isset($newObject->estoque))
                $newObject->estoque = 0;

            return $newObject->save();
        } catch (\Exception $e) {
            \Log::error('Error ' . $e->getMessage());
            return false;
        }
    }

    //Método responsável por gerar o pdf dos objetos
    //Passando como parâmetro a view e os dados dela
    public function pdfObjects($view, $data)
    {
//        try
//        {
//            return Pdf::generatePDF($view, $data);
//        }
//        catch(\Exception $e)
//        {
//            \Log::error('Error '.$e->getMessage());
//            return false;
//        }
//        catch(QueryException $e)
//        {
//            \Log::error('Error '.$e->getMessage());
//            return false;
//        }
    }

    public function getModel()
    {
        return get_class($this->model);
    }

    public function getTable()
    {
        return $this->model->getTable();
    }

    public function getQuery()
    {
        return $this->model;
    }

    public function redirectBack($message = null, $status = null)
    {
        return redirect()->back()
            ->with(
                [
                    'status_message' => $status ?? StatusMessage::SUCCESS,
                    'message' => $message ?? StatusMessage::MSG_SUCCESS_CREATE,
                ]
            );
    }

    public function redirectBackWithInputs($message = null, $status = null)
    {
        return redirect()->back()
            ->withInput()
            ->with(
                [
                    'status_message' => $status ?? StatusMessage::ERROR,
                    'message' => $message ?? StatusMessage::MSG_ERROR_CREATE,
                ]
            );
    }

    public function tratament($data)
    {
        return $this->model->tratament($data);
    }

}
