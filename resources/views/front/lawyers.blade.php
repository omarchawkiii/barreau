@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin: 200px 0 70px 0">
            <h3> Avocats </h3>
            <livewire:tables.lawyers-table />
        </div>
    </div>
</div>
