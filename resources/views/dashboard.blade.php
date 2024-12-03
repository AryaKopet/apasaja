<h1>Dashboard</h1>
<h2>Admin List</h2>
    <ul>
        @foreach($admins as $admin)
            <li>{{ $admin->name }} - {{ $admin->email }}</li>
        @endforeach
    </ul>
<h2>Material List</h2>
    <ul>
        @foreach($materials as $material)
            <li>{{ $material->name }} ({{ $material->category }})</li>
        @endforeach
    </ul>
<h2>Pelanggan List</h2>
    <ul>
        @foreach($pelanggan as $p)
            <li>{{ $p->nama }} - {{ $p->email }}</li>
        @endforeach
    </ul>
