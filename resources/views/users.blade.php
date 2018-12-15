@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
					<table class="table table-strip">
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Registered</th>
						</tr>
						
						
                    @foreach ($users as $user)
                        <tr>
							<td><?php echo $user->name;?></td>
							<td><?php echo $user->email;?></td>
							<td><?php echo $user->created_at;?></td>
						</tr>
                    @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
