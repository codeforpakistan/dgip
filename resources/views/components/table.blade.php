<div class="table-responsive">
  <table class="table table-striped table-sm text-nowrap">
    <thead>
      <tr>
        @foreach (array_keys($items->first()->toArray()) as $key)
        @if($key != 'region')
        <th>{{ ucwords($key) }}</th>
        @endif
        @endforeach
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
      <tr>
        @foreach ($item->toArray() as $key => $value)
        @if ($key != 'region')
        <td>{{ $value }}</td>
        @endif
        @endforeach
      </tr>
      @endforeach
    </tbody>
  </table>
</div>