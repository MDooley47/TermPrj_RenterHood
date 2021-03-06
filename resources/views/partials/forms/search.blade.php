<form class="my-2 my-lg-0 search" method="GET" action="{{ route('search') }}">
    <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
            <select class="custom-select bg-secondary text-white rounded-left filter" name="filter">
                <option value="keyword" @if(request('filter') == 'keyword') selected @endif>Keywords</option>
                <option value="postal" @if(request('filter') == 'postal') selected @endif>Postal Code</option>
            </select>
        </div>
        <input type="text" class="form-control query" name="query" placeholder="Search&hellip;" value="{{ request('query') }}">
        <div class="input-group-append">
            <button type="submit" class="btn bg-secondary text-white rounded-right">Search</button>
        </div>
    </div>
</form>
