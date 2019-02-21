<?php

namespace App\Http\Controllers;

use App\DataTables\PruebaDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests;
use App\Http\Requests\CreatePruebaRequest;
use App\Http\Requests\UpdatePruebaRequest;
use App\Models\Prueba;
use App\Repositories\PruebaRepository;
use Flash;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Response;

class PruebaController extends AppBaseController
{
    /** @var  PruebaRepository */
    private $pruebaRepository;

    public function __construct(PruebaRepository $pruebaRepo)
    {
        $this->pruebaRepository = $pruebaRepo;
    }

    /**
     * Display a listing of the Prueba.
     *
     * @param PruebaDataTable $pruebaDataTable
     * @return Response
     */
    public function index()
    {
        //return $pruebaDataTable->render('pruebas.index');
        $pruebas = Prueba::all();
        return view('pruebas.index')
            ->with('pruebas', $pruebas);
    }

    /**
     * Show the form for creating a new Prueba.
     *
     * @return Response
     */
    public function create()
    {
        return view('pruebas.create');
    }

    /**
     * Store a newly created Prueba in storage.
     *
     * @param CreatePruebaRequest $request
     *
     * @return Response
     */
    public function store(CreatePruebaRequest $request)
    {
        $input = $request->all();

        $prueba = $this->pruebaRepository->create($input);

        Session::flash('flash_message', 'Prueba saved successfully.');

        return redirect(route('pruebas.index'));
        //return view('pruebas.index');
    }

    /**
     * Display the specified Prueba.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prueba = $this->pruebaRepository->findWithoutFail($id);

        if (empty($prueba)) {
            Flash::error('Prueba not found');

            return redirect(route('pruebas.index'));
        }

        return view('pruebas.show')->with('prueba', $prueba);
    }

    /**
     * Show the form for editing the specified Prueba.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prueba = $this->pruebaRepository->findWithoutFail($id);

        if (empty($prueba)) {
            Flash::error('Prueba not found');

            return redirect(route('pruebas.index'));
        }

        return view('pruebas.edit')->with('prueba', $prueba);
    }

    /**
     * Update the specified Prueba in storage.
     *
     * @param  int              $id
     * @param UpdatePruebaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePruebaRequest $request)
    {
        $prueba = $this->pruebaRepository->findWithoutFail($id);

        if (empty($prueba)) {
            Flash::error('Prueba not found');

            return redirect(route('pruebas.index'));
        }

        $prueba = $this->pruebaRepository->update($request->all(), $id);

        Flash::success('Prueba updated successfully.');

        return redirect(route('pruebas.index'));
    }

    /**
     * Remove the specified Prueba from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prueba = $this->pruebaRepository->findWithoutFail($id);

        if (empty($prueba)) {
            Flash::error('Prueba not found');

            return redirect(route('pruebas.index'));
        }

        $this->pruebaRepository->delete($id);

        Flash::success('Prueba deleted successfully.');

        return redirect(route('pruebas.index'));
    }
}
