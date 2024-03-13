import './bootstrap';
import.meta.glob([
    '../images/**',
    '../fonts/**',
  ]);

  document.addEventListener('DOMContentLoaded', function () {
    var randomButton = document.getElementById('randomButton');
    var photohid = document.getElementById('photohid');
    var portfolioItems = document.querySelectorAll('.portfolio-item');
    var resultModal = new bootstrap.Modal(document.getElementById('resultModal'));
    var isRandomizing = false; // เพิ่มตัวแปรเพื่อตรวจสอบว่ากำลังทำการสุ่มหรือไม่

    function showRandomImage() {
        // หา Element ที่มี ID เป็น "randomImageContainer"
        var randomImageContainer = document.getElementById('randomImageContainer');

        // หา Element ที่มี class เป็น "not-selected" และเอาคลาสนี้ออก
        var notSelectedImages = document.querySelectorAll('.not-selected');
        notSelectedImages.forEach(function (item) {
            item.classList.remove('not-selected');
        });

        // สุ่ม Index จากรายการที่มี class เป็น "portfolio-item"
        var randomIndex = Math.floor(Math.random() * portfolioItems.length);

        // หา Element ที่มี class เป็น "portfolio-item" และ index ที่สุ่มได้
        var selectedImage = portfolioItems[randomIndex].querySelector('img');

        // สร้าง Element ภาพ
        var randomImage = document.createElement('img');

        // ตั้งค่าแหล่งที่มาของภาพ
        randomImage.setAttribute('src', selectedImage.getAttribute('src'));
        randomImage.setAttribute('class', 'img-fluid');

        // เพิ่ม Element ภาพลงใน Container
        randomImageContainer.innerHTML = ''; // เคลียร์เนื้อหาเก่า (ถ้ามี)
        randomImageContainer.appendChild(randomImage);

        // กำหนดให้ isRandomizing เป็น false เมื่อกระบวนการสุ่มเสร็จสิ้น
        isRandomizing = false;
    }

    randomButton.addEventListener('click', function () {
        // ตรวจสอบว่ากำลังทำการสุ่มหรือไม่
        if (!isRandomizing) {
            isRandomizing = true; // กำหนด isRandomizing เป็น true เพื่อป้องกันการกดซ้ำ
    
            var animationDuration = 5000; // 5 วินาที
            var interval = 100; // อัพเดททุก 150 มิลลิวินาที
            var frames = Math.ceil(animationDuration / interval);
            var currentFrame = 0;
    
            var animationInterval = setInterval(function () {
                if (currentFrame < frames) {
                    // สุ่มภาพ
                    var randomIndex = Math.floor(Math.random() * portfolioItems.length);
                
                    portfolioItems.forEach(function (item, index) {
                        if (index === randomIndex) {
                            item.querySelector('img').classList.remove('not-selected');
                        } else {
                            item.querySelector('img').classList.add('not-selected');
                        }
                    });
                
                    currentFrame++;
                
                    // ยกเลิกการซ่อน portfolioItems เมื่อกดปุ่มใหม่
                    portfolioItems.forEach(function (item) {
                        item.style.display = 'block'; // แสดงไอเท็มทั้งหมด
                        randomImageContainer.innerHTML = ''; // เคลียร์เนื้อหาเก่า (ถ้ามี)

                    });

                    function showRandomImage() {
                        // ทำงานเกี่ยวกับการแสดงภาพสุ่ม
                    
                        // ซ่อนภาพที่แสดง
                        resultModal.style.display = 'none';
                    }
                
                } else {
                    clearInterval(animationInterval);
                
                    // ซ่อน portfolioItems เมื่อแสดงผลลัพธ์จากการสุ่ม
                    portfolioItems.forEach(function (item) {
                        item.style.display = 'none';
                        
                    });

                    
                
                    // แสดง Modal เมื่อแสดงผลลัพธ์จากการสุ่ม
                    showRandomImage();
                }
            }, interval);
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
  // Get all the menu items
  var menuItems = document.querySelectorAll('.navbar-nav a');

  // Add click event listener to each menu item
  menuItems.forEach(function (menuItem) {
      menuItem.addEventListener('click', function () {
          // Close the offcanvas menu by selecting the button and triggering a click event
          var offcanvasButton = document.querySelector('.navbar-toggler');
          offcanvasButton.click();
      });
  });
});