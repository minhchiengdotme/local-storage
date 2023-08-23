## Tổng quan:
Nhà nhiều đồ linh tinh, nên viết cái app để quản lý
Mong muốn: Mỗi ô tủ sẽ dán mã barcode, đánh dấu stt. Khi cần tra cứu trong tủ đó chứa những gì thì giơ điện thoại lên scan trong app là được. Mỗi khi nhập hàng, sẽ xác định loại hàng đó thuộc ô tủ nào và nhập vào ô tủ tương ứng

Search: Có thể search theo tên món hàng, keyword, barcode
Nhập danh sách kho hàng: Nhập thủ công trên web/app hoặc import file excel,csv

## Yêu cầu kỹ thuật:
Backend: Laravel 10 chạy trên docker homeserver. 
Frontend: VueJS
App: Android webview, scan barcode, qr code
DB: mysql8
Cache: Memcache, redis

db sẽ export thành csv chứa trong app, mỗi lần mở app sẽ connect tới server để sync db mới về

## Quản lý tiến độ:
Notion

