<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprodukRequest;
use App\Http\Requests\UpdateprodukRequest;
use App\Repositories\produkRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class produkController extends AppBaseController
{
    /** @var  produkRepository */
    private $produkRepository;

    public function __construct(produkRepository $produkRepo)
    {
        $this->produkRepository = $produkRepo;
    }

    /**
     * Display a listing of the produk.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $produks = $this->produkRepository->all();

        return view('produks.index')
            ->with('produks', $produks);
    }

    /**
     * Show the form for creating a new produk.
     *
     * @return Response
     */
    public function create()
    {
        return view('produks.create');
    }

    /**
     * Store a newly created produk in storage.
     *
     * @param CreateprodukRequest $request
     *
     * @return Response
     */
    public function store(CreateprodukRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('foto')) {

            //Validate the uploaded file
            $Validation = $request->validate([

                'foto' => 'required'
            ]);

            // cache the file
            $file = $Validation['foto'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $imageName = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/foto_produk'), $imageName);

            $path = "foto_produk/" . $imageName;
        }

        $input['foto'] = $path;
        $produk = $this->produkRepository->create($input);

        Flash::success('Produk saved successfully.');

        return redirect(route('produks.index'));
    }

    /**
     * Display the specified produk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produk = $this->produkRepository->find($id);

        if (empty($produk)) {
            Flash::error('Produk not found');

            return redirect(route('produks.index'));
        }

        return view('produks.show')->with('produk', $produk);
    }

    /**
     * Show the form for editing the specified produk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produk = $this->produkRepository->find($id);

        if (empty($produk)) {
            Flash::error('Produk not found');

            return redirect(route('produks.index'));
        }

        return view('produks.edit')->with('produk', $produk);
    }

    /**
     * Update the specified produk in storage.
     *
     * @param int $id
     * @param UpdateprodukRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprodukRequest $request)
    {
        $produk = $this->produkRepository->find($id);

        if (empty($produk)) {
            Flash::error('Produk not found');

            return redirect(route('produks.index'));
        }
        $input = $request->all();

        if ($request->hasFile('foto')) {

            //Validate the uploaded file
            $Validation = $request->validate([

                'foto' => 'required'
            ]);

            // cache the file
            $file = $Validation['foto'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $imageName = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/foto_produk'), $imageName);

            $path = "foto_produk/" . $imageName;
            $input['foto'] = $path;
        }
        $produk = $this->produkRepository->update($input, $id);

        Flash::success('Produk updated successfully.');

        return redirect(route('produks.index'));
    }

    /**
     * Remove the specified produk from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produk = $this->produkRepository->find($id);

        if (empty($produk)) {
            Flash::error('Produk not found');

            return redirect(route('produks.index'));
        }

        $this->produkRepository->delete($id);

        Flash::success('Produk deleted successfully.');

        return redirect(route('produks.index'));
    }
}
