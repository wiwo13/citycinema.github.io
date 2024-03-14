let watchlist = [
    {"name": "Ellen Show", "link": "https://www.youtube.com/watch?v=DXGiVlEmUOk?si=5F026LlRfBk45DEb", "img": "./assets/img/Ellenshow/5.png"},
    {"name": "Steve TV Show", "link": "https://www.youtube.com/watch?v=EUs7i5ctxO0?si=Zt7_437ANQwiXMbq", "img": "./assets/img/steve/5.png"},
    {"name": "Little Big Shots", "link": "https://www.youtube.com/watch?v=JWv41P1RZuU?si=WyEVpRRKRk06vmQ0", "img": "./assets/img/bigshots/5.png"},
    {"name": "Tonight Show", "link": "https://www.youtube.com/watch?v=0TdSMhRfqO0?si=8kDQOmSnGhC99Ooo", "img": "./assets/img/jimmy/5.png"},
]


for(let i=0; i<watchlist.length; i++){
    document.querySelector(".dr-ga-movie-conatiner").innerHTML += `
                    <div class="movie-wrapper col-4 col-md-6 col-sm-12" style="">
						<div class=" h-30 movie cursor-pointer" style="box-shadow: var(--shadow); background: url(${watchlist[i].img}); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
						<div class="movie-details">
							<div class="col-12 h-auto d-flex align-items-center justify-content-end mb-5"></div>
							<div class="col-12 h-auto movie-title ">${watchlist[i].name}</div>
							<!-- <div class="col-12"></div> -->
							<div class="col-12 mt-little">
								<a href="${watchlist[i].link}" target="_blank" class="watch-btn text-decoration-none">
									<span class="ms-1">Watch</span><i class="fa-regular fa-circle-play"></i>
								</a>
							</div>
						</div>
					</div>
    `;
}