@extends('back.dashboard')

@section('dash__body')

<div class="">
    <h5 class="text-primary p-3 mb-0">Table: {{$table}}</h5>

    <div class="border-top">

        <table class="table table-sm" id="db_table">
            <thead>
                @foreach($columns as $column)
                <th class="px-2">{{$column}}</th>
                @endforeach()
                <th class="text-center">Update</th>
            </thead>
            <tbody>
                @foreach ($tabledata as $data)
                <tr>
                    @foreach($columns as $column)
                    <td class="px-2">
                        <input type="text" class="form-control form-control-sm" value="{{$data->$column}}" name="{{$column}}">
                    </td>
                    @endforeach
                    <td class="text-center">
                        <form actionUrl="{{route('updateTableRow')}}" method="get">
                            @csrf
                            <input type="hidden" name="table" value="{{$table}}">
                            @method('batch')
                            <button class="btn btn-primary btn-sm" type="submit" onclick="submitMe(this)">
                                <i class="fa-solid fa-check fa-sm"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>


</div>

@endsection