<div class="container" style="background: #eee">



<table class="table table-hover table-responsive text-center">
    <thead class=" table-dark ">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($project as  $item )
      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->name }} </td>

      </tr>
      @endforeach

    </tbody>
  </table>
</div>
