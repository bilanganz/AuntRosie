<div class="col-md-4">
    <div class="card mb-4 box-shadow">
    <img src="ingredient_images/{{ strtolower($ingredient->name) }}.jpg" alt="{{ $ingredient->name }}" width="75px" length="75px"/>
    <div class="card-body">
        <h2>{{ $ingredient->name }}</h2>
        <p class="card-text">{{ $ingredient->description }}</p>
        <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
            <a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('ingredients/' . $ingredient->id) }}" role="button">View</a>
            <a class="btn btn-primary btn-sm btn-outline-secondary" href="{{ URL::to('ingredients/' . $ingredient->id) . '/edit' }}" role="button">Edit</a>
            <form action="{{ URL::to('/ingredients/destroy/'.$ingredient->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-primary btn-sm btn-outline-secondary" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
            </form>
        </div>
        <small class="text-muted">{{ $ingredient->shelf_life }} days</small>
        </div>
    </div>
    </div>
</div>