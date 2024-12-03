<form action="{{ route('admins.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Admin">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Tambah Admin</button>
</form>
