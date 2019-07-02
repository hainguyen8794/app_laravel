<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class TypeGame extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_game')->insert([
            ['name' => 'Chiến thuật trừu tượng', 'description' => 'Đây là những board game mà không có câu chuyện (hoặc câu chuyện đóng vai trò rất nhỏ), mà chủ yếu tập trung vào lối chơi chiến thuật, thường chúng sẽ chỉ dành riêng cho hai người. Ví dụ như Cờ Tướng, Cờ Vua, Cờ Vây, Pentago,... 
 Những board game này thường có chiều sâu và được chơi lại nhiều lần để giúp người chơi phát triển trình độ. '],
            ['name' => 'Xúc xắc', 'description' => 'Các board game này có thành phần chủ yếu là xúc xắc, và dựa vào xác xuất để quyết định tính chiến thuật. Tuy nhiên chúng không hẳn là hoàn toàn rủi ro, mà có thể tạo ra cho người chơi cơ hội để kiểm soát vận may nếu biết tính toán.
            Một số dice game cơ bản như Yahtzee, Liar’s Dice, Can’t Stop!,...'],
            ['name' => 'Thẻ bài', 'description' => 'Những board game không có thành phần gì nhiều ngoài trừ bộ bài thuộc dạng này, chúng có thể chơi với nhiều luật biến thể khác nhau. Uno, Bài Tây, Mèo Nổ cũng là dạng game bài'],
            ['name' => 'Ẩn vai trò', 'description' => 'Các board game ẩn vai này thường được chơi đông người, mục đích chủ yếu là tương tác xã hội, tạo điều kiện để mọi người có thời gian nói chuyện với nhau bằng lời. Đặc trưng của game là mỗi người đều có một vai trò ẩn giấu, và phải tìm hiểu xem ai là ai. Ma Sói là board game phổ biến nhất thuộc thể loại này. '],
            ['name' => 'Đồng đội','description'=>'Board game không phải lúc nào cũng cạnh tranh với nhau, có những trò mà người chơi phải cùng nhau vượt qua thử thách của câu đố mà trò chơi đề ra, phải cùng thắng hoặc cùng thua. Những board game này yêu cầu tinh thần đồng đội, và cách làm việc chung với nhau rất cao.
 Tiêu biểu là Pandemic, Forbidden Island, Zombicide,...'],
            ['name' => 'Nhanh nhẹn', 'description' => 'Rèn luyện khả năng phản xạ là mục đích của thể loại board game này, trong đó những người chơi cùng tranh nhau xem ai phản ứng nhanh nhất trước một tình huống. Ví dụ như ai chụp lấy thẻ bài đó trước, hay ai hô lên trước, làm động tác nào trước. 
Những board game này thường có luật chơi rất đơn giản và chơi trong thời gian rất nhanh, như Spot it, Geistes, Halli Galli,... Cũng có một thể loại gần với nhanh nhẹn, đó là board game khéo léo như rút gỗ Jenga, Rút khỉ. 
'],
            ['name' => 'Nhập Vai', 'description' => 'Đây là những trò cho phép người chơi hóa thân thành một nhân vật nào đó để phiêu lưu vào một thế giới giả tưởng, thực hiện những nhiệm vụ. Những board game này có cốt truyện rất dày đặc và sống động, không đề cao nhiều ở lối chơi chiến thuật. 
 Những board game nhập vai nổi tiếng như Dungeons & Dragons, Arkham Horor, Warhammer, Hero Quest,...'],
            ['name' => 'Kinh tế', 'description' => 'Qua các board game này người chơi có thể học cách tính toán chi tiêu, thương lượng, trao đổi với người khác để ngày càng kiếm được nhiều tiền hơn. Các board game này đa dạng từ đơn giản như Monopoly, Catan đến phức tạp như Puerto Rico, Caylus. '],
            ['name' => 'Đặt thẻ', 'description' => 'Những board game đặt thẻ sử dụng những miếng thẻ hình dạng khác nhau và ghép vào để dàn trải ra một vùng nhất định. Dễ liên tưởng nhất là trò Domino truyền thống, còn hiện đại hơn có thể kể đến Carcassonne hay Qwirkle. 
 Trên đây là một giới thiệu sơ lược để bạn có thể hiểu được sự đa dạng về thể loại của board game, song nó sẽ không phân chia rạch ròi như thế, bởi một số game có thể có nhiều thể loại kết hợp với nhau một cách hòa hợp. 
']
        ]);
    }
}
