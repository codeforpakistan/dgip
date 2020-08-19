<div class="table-responsive">
  <table class="table table-striped mb-0">
    <thead>
      <tr>
        @foreach (array_keys($items->first()->toArray()) as $key)
        @if (!in_array($key, ['region','image','body','content','fee','slug','attachment']))
          @if (in_array($key, ['created_at', 'updated_at']))
          <th>{{ strtoupper(Str::of($key)->replace('_at', '')) }}</th>
          @else
          <th>{{ strtoupper($key) }}</th>
          @endif
        @endif
        @endforeach
        <th width="1%"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
      <tr>
        @foreach ($item->toArray() as $key => $value)
        @if (!in_array($key, ['region','image','body','content','fee','slug','attachment']))
          @if (in_array($key, ['created_at', 'updated_at']))
          <td>{{ \Carbon\Carbon::parse($value)->diffForHumans() }}</td>
          @else
          <td>{{ $value }}</td>
          @endif
        @endif
        @endforeach
        <td class="text-nowrap">
          <form action="{{ route('admin.'.Str::plural(Str::snake(class_basename($items[0]))).'.destroy', $item->id) }}" method="post">
            @csrf @method('DELETE')
            <a class="btn btn-default p-0 text-primary" href="{{ route('admin.'.Str::plural(Str::snake(class_basename($items[0]))).'.edit', $item->id) }}"><i class="feather-16" data-feather="edit"></i></a>
            <button class="btn btn-default text-danger p-0" type="submit" onclick="return confirm('Are you sure?')"><i class="feather-16" data-feather="delete"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
