use App\Models\FoundItem;

public function index()
{
    $items = FoundItem::latest()->get();
    return view('found.index', compact('items'));
}
