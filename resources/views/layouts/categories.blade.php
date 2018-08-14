
                @foreach($category as $cat)
                <li>    <a href="/category/{{$cat['category']}}" class="list-group-item"> {{ $cat['category']}}</a></li>
                @endforeach
