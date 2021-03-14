@extends('layouts.app')
@section('title', 'About')
@section('content')
<section id="contact" style="margin-top: 50px;">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card text-white bg-primary mb-3 text-center">
          <div class="card-body">
            <p class="card-text">About</p>
          </div>
        </div>
        <ul class="list-group">
          <li class="list-group-item">Rifqi Aufa Arofik</li>
          <li class="list-group-item">5520119013</li>
          <li class="list-group-item">if a 19</li>
        </ul>
      </div>
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal" style="margin-bottom: 30px;">Klik gan</button>
    <x-modal id="modal">
    @slot('header')
        Contact->
    @endslot
    Page berikutnya ?
    @slot('footer1')
        Gas
    @endslot
    @slot('footer2')
        Jangan dulu
    @endslot
    </x-modal>
@stop
