const post = [
      {
            id: 1,
            image: "https://japana.vn/uploads/news/1541131006-dung-cac-ung-dung-quet-ma-vach-de-kiem-tra-hang-that-gia-4.jpg",
            title: 'Mã vạch có thể kiểm tra được hàng thật, hàng giả - Đúng hay sai?',
            text: 'Thời gian gần đây, Siêu Thị Nhật Bản Japana nhận được rất nhiều tin nhắn và điện thoại, hỏi rằng: “mã vạch sản phẩm có chính...',
            view: 2402
      },
      {
            id: 2,
            image: 'https://japana.vn/uploads/news/1617095122-thuoc-ho-tro-dieu-tri-ung-thu-fucoidan-la-gi-5.jpg',
            title: 'Thuốc hỗ trợ điều trị ung thư Fucoidan là gì? Có thật sự tốt không?',
            text: 'Thuốc Fucoidan là dòng thực phẩm bổ sung dinh dưỡng được sử dụng để điều chỉnh, bổ sung các chất thiếu hụt cho người bệnh hoặc...',
            view: 214
      },
      {
            id: 3,
            image: 'https://japana.vn/uploads/news/1612770361-iet-ve-ung-thu-va-cach-phong-ngua-hieu-qua-001.jpg',
            title: '[Infographic] Hiểu biết về Ung thư và cách phòng ngừa hiệu quả',
            text: 'Ung thư được xem là “hung thần” với nguy cơ tử vong cao, khó chữa trị và tốn kém. Thế nhưng, bạn vẫn có thể “phòng bệnh hơn chữa...',
            view: 410
      },
      {
            id: 4,
            image: 'https://japana.vn/uploads/news/1632551579-hanh-dem-lai-hieu-qua-cao-cho-nguoi-thua-can-9.jpg',
            title: 'Top 8 loại bột giảm cân nhanh đem lại hiệu quả cao cho người thừa cân',
            text: 'Giảm cân nhanh là mong muốn của nhiều chị em phụ nữ. Quá trình này thành công hay thất bại có sự phụ thuộc vào phương pháp và sản phẩm...',
            view: 53
      },
      {
            id: 5,
            image: 'https://japana.vn/uploads/news/1632550887-top-7-tra-giam-can-nhanh-chong-va-hieu-qua-0.jpg',
            title: 'Top 7 trà giảm cân nhanh chóng và hiệu quả',
            text: 'Hiện nay, trên thị trường có rất nhiều phương pháp giảm cân, cải thiện lượng mỡ dư thừa, mang đến một vóc dáng thon gọn. Trong đó,...',
            view: 32
      },
      {
            id: 6,
            image: 'https://japana.vn/uploads/news/1632121069-n-nhanh-chong-va-hieu-qua-cho-nguoi-thua-can-1.jpg',
            title: '12 Cách giảm cân nhanh chóng và hiệu quả cho người thừa cân',
            text: 'Thừa cân, béo phì luôn là nỗi lo lắng của hầu hết chị em phụ nữ. Nó không chỉ ảnh hưởng đến vóc dáng, sự tự tin mà còn tiềm ẩn...',
            view: 286
      },
      {
            id: 7,
            image: 'https://japana.vn/uploads/news/1622428069-4-tieu-chi-nhan-biet-san-pham-chat-luong-cao12.jpg',
            title: 'Fucoidan loại nào tốt? 4 tiêu chí nhận biết sản phẩm chất lượng cao',
            text: 'Fucoidan loại nào tốt với độ tinh khiết cao, dễ dàng hấp thu vào cơ thể, hỗ trợ tốt điều trị bệnh ung thư? Đây là băn khoăn của nhiều...',
            view: 23
      },
      {
            id: 8,
            image: 'https://japana.vn/uploads/news/1622427989--vao-luc-nao-uong-truoc-bua-an-hay-sau-bua-an6.jpg',
            title: 'Tảo xoắn uống vào lúc nào? Uống trước bữa ăn hay sau bữa ăn?',
            text: 'Tảo xoắn uống vào lúc nào rất quan trọng, một số trường hợp cần uống trước bữa ăn, nhưng cũng có người nên uống sau bữa ăn mới...',
            view: 173
      },
      {
            id: 9,
            image: 'https://japana.vn/uploads/news/1622427094-idan-mua-o-dau-chinh-hang-dam-bao-chat-luong12.jpg',
            title: 'Fucoidan mua ở đâu chính hãng, đảm bảo chất lượng?',
            text: 'Fucoidan mua ở đâu chính hãng, đảm bảo chất lượng giúp giảm đau đớn do bệnh ung thư gây ra là băn khoăn của hầu hết bệnh nhân đang...',
            view: 112
      },
      {
            id: 10,
            image: 'https://japana.vn/uploads/news/1622097268-dan-su-dung-tao-xoan-nhat-voi-nguoi-bi-da-day4.jpg',
            title: 'Hướng dẫn sử dụng tảo xoắn Nhật với người bị dạ dày',
            text: 'Đối với người bị bệnh dạ dày, thực hiện đúng hướng dẫn sử dụng tảo xoắn Nhật sẽ giúp mang lại hiệu quả cao hơn, phát huy tốt...',
            view: 455
      },
      {
            id: 11,
            image: 'https://japana.vn/uploads/news/1617095495-c-pham-chuc-nang-nhat-ban-duoc-tin-dung-nhat-5.jpg',
            title: 'TOP 8 loại thực phẩm chức năng Nhật Bản được tin dùng nhất hiện nay',
            text: 'Nhật Bản vốn nổi tiếng là quốc gia sống khỏe và có tuổi thọ cao hàng đầu thế giới, với một trong số những bí quyết đó là sử...',
            view: 6691
      },
      {
            id: 12,
            image: 'https://japana.vn/uploads/news/1617096488-thuc-pham-chuc-nang-la-gi-2.jpg',
            title: 'Thực phẩm chức năng là gì? Những lưu ý sử dụng TPCN đúng cách',
            text: 'Thực phẩm chức năng sức khỏe là thực phẩm (dạng sản phẩm) được sản xuất/chế biến sử dụng như thành phần chức năng bổ dưỡng...',
            view: 591
      },
      {
            id: 13,
            image: 'https://japana.vn/uploads/news/1618279906-nhung-dau-hieu-nhan-biet-ung-thu-som.jpg',
            title: 'Ung thư là gì? Những dấu hiệu nhận biết ung thư sớm',
            text: 'Việt Nam có hơn 126.000 ca mắc mới mỗi năm và 94.000 người tử vong, con số ngày không ngừng tăng. Tại Việt Nam, ước tính có khoảng 70% bệnh...',
            view: 1178
      },
      {
            id: 14,
            image: 'https://japana.vn/uploads/news/1617093075-fucoidan-la-gi-2.jpg',
            title: 'Fucoidan là gì? Tác dụng của Fucoidan đối với sức khỏe',
            text: 'Fucoidan là một polysaccharide sulfate hóa được tìm thấy chủ yếu trong các loài tảo nâu, rong nâu Okinawa, Mozuku, Wakame, Hijiki, rong Bladder Wrack…...',
            view: 1171
      },
      {
            id: 15,
            image: 'https://japana.vn/uploads/news/1617097563-ham-vang-tang-cuong-de-khang-danh-bay-co-vy-52.jpg',
            title: 'TOP 7 “sản phẩm vàng” tăng cường đề kháng, đánh bay Cô Vy',
            text: 'Tăng cường sức đề kháng tự nhiên của cơ thể, tạo “tấm khiên” chống lại khuẩn Cô Vy giữa tình hình dịch bệnh diễn biến phức...',
            view: 3070
      },
      {
            id: 16,
            image: 'https://japana.vn/uploads/news/1617092237-dung-phong-va-dieu-tri-ung-thu-cua-fucoidan-22.jpg',
            title: '[Infographic] Fucoidan là gì? Thực hư công dụng phòng và điều trị ung thư của Fucoidan',
            text: 'Fucoidan được nhiều người truyền tai nhau như một “thần dược” phòng ngừa và điều trị ung thư. Vậy, Fucoidan là gì? Thực hư công dụng...',
            view: 282
      },
      {
            id: 17,
            image: 'https://japana.vn/uploads/news/1612133685--cua-nhat-cho-tre-4-tuoi-nao-tot-nhat-hien-nay.jpg',
            title: 'Sữa tăng chiều cao của Nhật cho trẻ 4 tuổi nào tốt nhất hiện nay?',
            text: 'Giai đoạn vàng tăng chiều cao từ 4-16 tuổi vô cùng quan trọng để giúp bé tăng trưởng nhanh về chiều cao và thể chất. Để lựa chọn sản...',
            view: 100
      },
      {
            id: 18,
            image: 'https://japana.vn/uploads/news/1617098217-kham-pha-10-cong-dung-tuyet-voi-cua-collagen-8.png',
            title: '[Infographic] Khám phá 10 công dụng tuyệt vời của Collagen',
            text: 'Xu hướng làm đẹp, chống lão hoá da từ Collagen đang là dẫn đầu hiện nay và được nhiều chị em lựa chọn. Thế nhưng, Collagen là gì? Có...',
            view: 1181
      },
      {
            id: 19,
            image: 'https://japana.vn/uploads/news/1611559817-g-noi-bat-cua-nattokinase-doi-voi-suc-khoe-(3).jpg',
            title: '[Infographic] 6 công dụng nổi bật của Nattokinase đối với sức khỏe',
            text: 'Nattokinase vốn nổi tiếng là thành phần có khả năng phòng ngừa đột quỵ, bảo vệ sức khỏe tim mạch, trí não. Thế nhưng, Nattokinase là...',
            view: 1866
      },
      {
            id: 20,
            image: 'https://japana.vn/uploads/news/1617097912--7-vien-chong-dot-quy-nhat-tot-nhat-hien-nay-8.jpg',
            title: '[Infographic] TOP 7 viên chống đột quỵ Nhật tốt nhất hiện nay',
            text: 'Các dòng thuốc chống đột quỵ Nhật Bản luôn là lựa chọn hàng đầu của người Việt trong việc chăm sóc sức khỏe, phòng ngừa tai biến,...',
            view: 3195
      },
]

let perPage = 10;
let currentPage = 1;
let start = 0;
let end = perPage;

const totalPage = Math.ceil(post.length / perPage);
console.log(totalPage)

const btnNext = document.querySelector('.btn-next');
const btnPrev = document.querySelector('.btn-prev');


function renderPost(){
      html = '';
      const content = post.map((item, index) =>{
            if(index >= start && index < end){
                  html += `<div class="posts__content-item">
                  <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-4">
                          <div class="img">
                              <img src='${item.image}'>
                          </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-8">
                          <div class="text">
                              <a href="#">${item.title}</a>
                              <p>${item.text}</p>
                              <span><i class="fa fa-eye" aria-hidden="true"></i>${item.view}</span>
                          </div>
                      </div>
                  </div>
                  </div>`;
                  // console.log(html);
                  return html;
            }
      });

      document.getElementById('post').innerHTML = html; 
}
renderPost();
renderListPage();

function getCurrentPage(currentPage){
      start = (currentPage - 1) * perPage;
      end = currentPage * perPage;
}



function renderListPage(){
      let html ='';
      html += `<li class="active"><span>${1}</span></li>`;

      for(let i=2; i <= totalPage; i++){
            html += `<li><span>${i}</a></span>`;
      }
      document.getElementById('number-page').innerHTML = html;
      
}

function changPage(){
      const currentPages = document.querySelectorAll('.number-page li')
      // console.log(currentPage);
      for(let i=0; i < currentPages.length; i++){
            currentPages[i].addEventListener('click', ()=>{
                  let value = i + 1;
                  currentPage = value;

                  $('.number-page li').removeClass('active');
                  currentPages[i].classList.add('active')
                  getCurrentPage(currentPage)
                  renderPost();
            })
      }
}
changPage();

btnNext.addEventListener('click', ()=>{
      currentPage++;

      if(currentPage > totalPage){
            currentPage = totalPage;
      }
      if(currentPage === totalPage){
            $('.btn-next').addClass('btn-active');
      }
      $('.btn-prev').removeClass('btn-active');
      $('.number-page li').removeClass('active');
      $(`.number-page li:eq(${currentPage - 1})`).addClass('active');
      
      getCurrentPage(currentPage);
      renderPost();     
})

btnPrev.addEventListener('click', ()=>{
      currentPage--;

      if(currentPage <= 1){
            currentPage = 1;
      }
      if(currentPage == 1){
            $('.btn-prev').addClass('btn-active');
      }
      $('.btn-next').removeClass('btn-active');
      $('.number-page li').removeClass('active'); 
      $(`.number-page li:eq(${currentPage - 1})`).addClass('active');
      getCurrentPage(currentPage);
      renderPost();     
})

