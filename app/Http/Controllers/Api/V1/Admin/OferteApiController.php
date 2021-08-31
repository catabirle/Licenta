<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOfertaRequest;
use App\Http\Requests\UpdateOfertaRequest;
use App\Http\Resources\Admin\OfertaResource;
use App\Oferta;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OferteApiController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('oferta_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OfertaResource(Oferta::with(['city_from', 'city_to'])->get());
    }

}
