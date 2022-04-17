<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$title}}</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                {{$slot}}
            </div>
        </div>
    </div>
</div>
