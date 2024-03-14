const chevron = document.querySelectorAll(".chevron");
const aside_bar = document.querySelector(".aside-bar");
const follower_wrapper = document.querySelector(".following-wrapper");
const new_feed_link = document.querySelectorAll(".new-feed-link");
const new_feed_link_text = document.querySelectorAll(".new-feed-link-text");
const main_panel = document.querySelector(".main-panel");
const logout_text = document.querySelector(".fa-arrow-right-from-bracket");
const logout_btn = document.querySelector(".logout-text");
const logo = document.querySelector(".logo");

// for aside bar toggling
chevron.forEach(e => {
    e.addEventListener("click", () => {
        chevron.forEach(f => {
            f.classList.remove("active");
        })
        e.classList.add("active");
        if(e.classList.contains("fa-chevron-right") && e.classList.contains("active")){


            aside_bar.classList.add("col-1");
            aside_bar.classList.remove("col-3");
            main_panel.classList.add("col-11");
            main_panel.classList.remove("col-9");

            new_feed_link.forEach(e => {
                e.querySelector(".fa-solid").classList.remove("me-1");
                e.classList.add("justify-content-center");
            })
            new_feed_link_text.forEach(e => {
                e.classList.add("d-none");
            })

            follower_wrapper.classList.add("d-none");
            logout_text.classList.add("d-none");
            logout_btn.classList.remove("me-1");
            logo.style.width = "50px";
            logo.style.height = "50px";
            
        }else{

            aside_bar.classList.remove("col-1");
            aside_bar.classList.add("col-3");
            main_panel.classList.remove("col-11");
            main_panel.classList.add("col-9");

            new_feed_link.forEach(e => {
                e.querySelector(".fa-solid").classList.add("me-1");
                e.classList.remove("justify-content-center");
            })
            new_feed_link_text.forEach(e => {
                e.classList.remove("d-none");
            })

            follower_wrapper.classList.remove("d-none");
            logout_text.classList.remove("d-none");
            logout_btn.classList.add("me-1");
            logo.style.width = "80px";
            logo.style.height = "80px";
            
        }

    })
    
})


// for new feed navigation links
new_feed_link.forEach(e => {
    e.addEventListener("click", () => {
        new_feed_link.forEach(i => {
            i.classList.remove("active");
        })
        e.classList.add("active");
    })
})