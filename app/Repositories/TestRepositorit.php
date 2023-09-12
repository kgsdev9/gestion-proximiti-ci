
public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function all()
    {
        return $this->category->orderBy('name')->get();
    }

    public function collection(Array $id)
    {
        return $this->category->whereIn('id', $id)
                                ->orderBy('name')
                                ->get();
    }

    public function single(Int $id)
    {
        return $this->category->find($id);
    }

    public function save(Object $data)
    {
        if ($data->id) {
            $this->category = $this->category->find($data->id);
        }
        $this->category->name = $data->name;
        $this->category->save();

        return $this->category;
    }

    public function destroy(Int $id)
    {
        $this->category = $this->category->find($id);
        $this->category->delete();
    }
