@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        My Camps
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Camp</th>
                                    <th>Price</th>
                                    <th>Register Data</th>
                                    <th>Paid Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($checkouts as $checkout)
                                    <tr class="align-middle">
                                        <td>
                                            {{ $checkout->User->name }}
                                        </td>
                                        <td>
                                            {{ $checkout->Camp->title }}
                                        </td>
                                        <td>
                                            Rp {{ $checkout->Camp->price }} K
                                        </td>
                                        <td>
                                            {{ $checkout->created_at->format('M d Y')}}
                                        </td>
                                        <td>
                                            @if($checkout->is_pad)
                                                <span class="badge bg-success">Paid</span>
                                            @else
                                                <span class="badge bg-warning">Waiting</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="" method="POST">
                                                @csrf
                                                <button class="btn btn-primary btn-sm">Set to paid</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No camps registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
