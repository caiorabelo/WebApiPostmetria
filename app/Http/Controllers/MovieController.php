<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Repositories\MovieRepository;

class MovieController extends Controller
{
    private $movieRepository;

    public function __construct(MovieRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function index()
    {
        return $this->movieRepository->findAll();
    }

    public function store(MovieRequest $request)
    {
        return $this->movieRepository->create($request);
    }

    public function show($id)
    {
        return $this->movieRepository->findId($id);
    }

    public function update(MovieRequest $request, $id)
    {
        return $this->movieRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->movieRepository->delete($id);
    }
}
