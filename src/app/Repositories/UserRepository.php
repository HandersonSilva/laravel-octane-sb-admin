<?php

namespace App\Repositories;

use App\Enums\StatusMessage;
use App\Interfaces\Repositories\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    public function __construct(public User $user)
    {
        parent::__construct($user);
    }

    public function createObject($data)
    {
        try{
            $data = $this->tratament($data);
            parent::createObject($data);

            return $this->redirectBack();

        }catch (\Exception $e){
            \Log::error($e->getMessage());
            return $this->redirectBackWithInputs();
        }
    }

    public function updateObject($id, $data)
    {
        try{
            $data = $this->tratament($data);
            parent::updateObject($id, $data);

            return $this->redirectBack(StatusMessage::MSG_SUCCESS_UPDATE);

        }catch (\Exception $e){
            \Log::error($e->getMessage());
            return $this->redirectBack(StatusMessage::MSG_ERROR_UPDATE, StatusMessage::ERROR);
        }
    }

    public function deleteObject($id)
    {
        if(Auth::user()->id == $id){
            return $this->redirectBack(StatusMessage::MSG_ERROR_DELETE_SELF, StatusMessage::ERROR);
        }

        return parent::deleteObject($id);
    }

}
