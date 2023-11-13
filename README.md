# UTS-Hill-Chiper

<p>Hills Chipper adalah metode keamanan yang menggunakan teknik "chipping" (penghancuran) terhadap kunci rahasia yang digunakan untuk login. Implementasi pada sistem login memanfaatkan algoritma kriptografi untuk mengacak kunci rahasia (seperti password) sebelum disimpan. Ini dilakukan dengan mengubah nilai kunci menggunakan fungsi hash atau enkripsi tertentu sebelum disimpan di database.
  
Ketika pengguna mencoba login, nilai yang diinput akan di-"chip" terlebih dahulu menggunakan algoritma yang sama, dan hasilnya akan dibandingkan dengan nilai yang telah di-"chip" sebelumnya yang tersimpan di database. Jika kedua nilai ini sesuai, pengguna diizinkan untuk masuk ke sistem.

Dengan implementasi Chipper Hills pada sistem login, keamanan ditingkatkan karena nilai-nilai yang tersimpan tidak langsung dapat dibaca atau dipahami. Ini membantu melindungi informasi sensitif pengguna, seperti password, dari serangan peretas atau akses yang tidak sah.</p>

<h1>Fungsi Enkript dan Decript</h1>


    function matrix_inverse($matrix, $mod)
    {
    $det = det($matrix);
    $inv_det = null;

    for ($i = 1; $i < $mod; $i++) {
        if (($det * $i) % $mod == 1) {
            $inv_det = $i;
            break;
        }
    }

    if ($inv_det === null) {
        throw new Exception("Modular inverse does not exist.");
    }

    $adj_matrix = [
        [$matrix[1][1], -$matrix[0][1]],
        [-$matrix[1][0], $matrix[0][0]]
    ];

    $inverse_matrix = [];
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $value = $adj_matrix[$i][$j];
            $inverse_matrix[$i][$j] = (($value % $mod + $mod) * $inv_det) % $mod;
        }
    }

    return $inverse_matrix;
    }
    
    function det($matrix)
    {
        return $matrix[0][0] * $matrix[1][1] - $matrix[0][1] * $matrix[1][0];
    }
    
    function hill_cipher($text, $key, $mode)
    {
    $mod = 26;
    $text = str_replace(" ", "", strtoupper($text));
    $text_len = strlen($text);

    if ($text_len % 2 != 0) {
        $text .= "X";
    }

    $key_matrix = $key;
    $key_inverse = matrix_inverse($key_matrix, $mod);

    if ($mode === "decrypt") {
        list($key_matrix, $key_inverse) = array($key_inverse, $key_matrix);
    }

    $result = "";
    for ($i = 0; $i < $text_len; $i += 2) {
        $char_pair = [ord($text[$i]) - ord("A"), ord($text[$i + 1]) - ord("A")];
        $encrypted_pair = [0, 0];

        for ($j = 0; $j < 2; $j++) {
            for ($k = 0; $k < 2; $k++) {
                $encrypted_pair[$j] += $key_matrix[$j][$k] * $char_pair[$k];
            }
            $encrypted_pair[$j] = $encrypted_pair[$j] % $mod;
        }

        $result .= chr($encrypted_pair[0] + ord("A")) . chr($encrypted_pair[1] + ord("A"));
    }

    return $result;
    }
