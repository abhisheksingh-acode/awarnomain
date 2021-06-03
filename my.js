        

    var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 100,
        backDelay: 700,
        backSpeed: 20,
        loop: true,
        loopCount: 500,
       });

       var swiper = new Swiper('.swiper-container', {
        cssMode: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination'
        }
      });
  
  
  
      $(document).ready(function () {

        $('.counter').each(function () {
          $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
          }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });


        $('.tabBtn').click(function(){
          var tab_id = $(this).attr('tab-id');
          // $('.tabBtn').css({"background":"#490eea"});
          
          $(".tabBtn").removeClass("glow");
          $(this).addClass("glow");
          $('.content-box').css({"opacity":"0","visibility":"hidden"});
          $(`${"#" + tab_id}`).css({"opacity":"1", "background":"#e9e9e9", "visibility":"visible"});
        });

      });
  
  
  
  
  
  
  
      gsap.registerPlugin(ScrollTrigger);
      gsap.to('.fillBox1', {
        duration: 2,
        ease: "none",
        height: '100%',
        scrollTrigger: {
          trigger: '.fillLine1',
          start: "top 70%",
          end: 'bottom 70%',
          scrub: true
        }
      });
  
      gsap.to('.c1', {
        duration: 0.1,
        backgroundColor: "#490eea",
        border: "none",
        scrollTrigger: {
          trigger: '.c1',
          start: "80% 80%",
          end: 'bottom top',
          toggleActions: "play none none reset"
        }
  
      });
  
      gsap.to('.c2', {
        backgroundColor: "#490eea",
        duration: 0.1,
        border: "none",
        scrollTrigger: {
          trigger: '.c2',
          start: "80% 80%",
          end: 'bottom top',
          toggleActions: "play none none reset"
        }
  
      });
  
      gsap.to('.c3', {
        backgroundColor: "#490eea",
        duration: 0.1,
        border: "none",
        scrollTrigger: {
          trigger: '.c3',
          start: "80% 80%",
          end: 'bottom top',
          toggleActions: "play none none reset",
        }
  
      });

      // Here comes the on scroll text content


      const as2 = gsap.timeline({
        scrollTrigger: {
          trigger: ".c1",
          start: "80% 80%",
          end: "center bottom",
          toggleActions: "play none none reset"
        }
      });

      as2.from(".appear > p:nth-child(1)", {opacity: 0, y:70, ease: Back.easeOut, duration: 1});


      const as3 = gsap.timeline({
        scrollTrigger: {
          trigger: ".c2",
          start: "80% 80%",
          end: "bottom",
          toggleActions: "play none none reset"
        }
      });
      as3.from(".appear2 > p:nth-child(1)", {opacity: 0, y:70, ease: Back.easeOut, duration: 1})

      const img2 = gsap.timeline({
        scrollTrigger: {
          trigger: ".c2",
          start: "80% 80%",
          end: "bottom",
          toggleActions: "play none none reset"
        }
      });
      img2.from(".appear > img", {opacity: 0, y:70, ease: Back.easeOut, duration: 1});

      const img3 = gsap.timeline({
        scrollTrigger: {
          trigger: ".c1",
          start: "80% 80%",
          end: "bottom",
          toggleActions: "play none none reset"
        }
      });
      img3.from(".appear2 > img:nth-child(2)", {opacity: 0, y:70, ease: Back.easeOut, duration: 1});

      const img4 = gsap.timeline({
        scrollTrigger: {
          trigger: ".c3",
          start: "80% 80%",
          end: "bottom",
          toggleActions: "play none none reset"
        }
      });
      img4.from(".appear2 > img:nth-child(3)", {opacity: 0, y:70, ease: Back.easeOut, duration: 1});


      const as5 = gsap.timeline({
        scrollTrigger: {
          trigger: ".c2",
          start: "80% 80%",
          end: "bottom",
          toggleActions: "play none none reset"
        }
      });
      as5.from(".appear > p:nth-child(2)", {opacity: 0, y:70, ease: Back.easeOut, duration: 1});


      const as4 = gsap.timeline({
        scrollTrigger: {
          trigger: '.c3',
          start: "80% 80%",
          end: 'bottom top',
          toggleActions: "play none none reset"
        }
      });
      as4.from(".appear > p:nth-child(3)", {opacity: 0, y:70, ease: Back.easeOut, duration: 1 });

      
  
    //   const t2 = gsap.timeline({
    //     scrollTrigger: {
    //       trigger: ".triggerPin",
    //       scrub: true,
    //       start: "top top",
    //       end: "bottom",
    //       pin: ".triggerPin"
    //     }
    //   });
  
    //   t2.from(".no1", { duration: 3, opacity: 0 })
    //     .from(".no2", { duration: 3, opacity: 0, delay: 2 })
    //     .from(".no3", { duration: 3, opacity: 0, delay: 2 });


        // const t3 = gsap.timeline({
        //     scrollTrigger: {
        //       trigger: "#fullpage",
        //       scrub: true,
        //       start: "top top",
        //       end: "bottom",
        //       pin: "#fullpage",
        //     }
        //   });
      
        //   t3.from(".fullSectionA", { duration: 3, opacity: 0 })
        //     .from(".fullSectionB", { duration: 3, opacity: 0, delay: 2 })
        //     .from(".fullSectionC", { duration: 3, opacity: 0, delay: 2 })
        //     .from(".fullSectionD", { duration: 3, opacity: 0, delay: 2 });
            