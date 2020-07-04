<php

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class ItemModel {
        public static function get_all() {
            $item = DB::table('item')->get();
            return $item;
        }
        public static function save($data) {
            $new_items = DB::table('item')->insert($data);

            return $new_items;
        }
        public static function find_by_id($id){ 
            $item = DB::table('items') ->where('id', $id)->first();
            return $item;
        }

        public static function update($id, $request) {
            $item = DB::table('items')
                    ->where('id', $id)
                    ->update([
                        'name' => $request["name"],
                        'description' => $request->["description"],
                        'price' => $request->["price"],
                        'stock' => $request->["stock"],
                    ]);
            return $item;
        }
        public static function destroy($id){
            $deleted = DB::table('items')
                     ->where('id', $id)
                     ->delete();
            return $deleted;
        }
    }


?>
<!--get all bebas penulisannya
    ini membuat model
    findbyid berguna untuk mencari data di table item dengan id tertentu
    model beguna berhubungan database yaitu mencari data dan mengembalikan datanya
-->
