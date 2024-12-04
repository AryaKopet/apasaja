<?
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // Pastikan nama tabel sesuai dengan database
    protected $table = 'pelanggan';

    // Jika menggunakan timestamps
    public $timestamps = true;

    // Kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'email',
        'no_telepon',
        'lokasi',
    ];
}
