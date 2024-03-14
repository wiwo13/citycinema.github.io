let comming_shows = [
    {"name": "7Escape", "Release date": "Sep 15", "Episodes": 17, "link": "https://www.youtube.com/watch?v=P_ybS5e7J14", "img": "./assets/img/cm/7escape.png"},
    {"name": "Bumpy Family", "Release date": "Sep 18", "Episodes": 120, "link": "https://www.youtube.com/watch?v=7bvIi2ABcGQ", "img": "./assets/img/cm/bumpy_fam.jpg"},
    {"name": "Sex Education Season 4", "Release date": "Sep 21", "Episodes": 21, "link": "https://www.youtube.com/watch?v=VgJotJx8Iio", "img": "./assets/img/cm/sexedu.jpg"},
    {"name": "The Worst of Evil", "Release date": "Sep 27", "Episodes": 27, "link": "https://www.youtube.com/watch?v=4Rmrhg9A0Oc", "img": "./assets/img/cm/The_Worst_Of_Evil.jpg"},
    {"name": "Starstruck Season 3", "Release date": "Sep 28", "Episodes": 28, "link": "https://www.youtube.com/watch?v=m6UsdlcEE44", "img": "./assets/img/cm/starstruck-season.jpg"},
]


for(let i = 0; i < comming_shows.length; i++){
    document.querySelector(".dr-ga-movie-conatiner").innerHTML += `
                    <div class="movie-wrapper col-4 col-md-6 col-sm-12" style=";">
						<div class=" h-30 movie cursor-pointer" style="box-shadow: var(--shadow); background: url(${comming_shows[i].img}); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
						<div class="movie-details">
							<div class="col-12 h-auto d-flex align-items-center justify-content-end mb-sm-5 mb-md-3 mb-5"></div>
							<div class="col-12 h-auto movie-title ">${comming_shows[i].name}</div>
							<!-- <div class="col-12"></div> -->
							<div class="d-flex align-items-center justify-content-start col-100">
								<div class="col-4 rating ms-1">${comming_shows[i]["Release date"]}</div>
								<div class="col-9 dur">Episode : ${comming_shows[i].Episodes}</div>
							</div>
							<div class="col-12 mt-little">
								<a href="${comming_shows[i].link}" target="_blank" class="watch-btn text-decoration-none">
									<span class="ms-1">Trailer</span><i class="fa-regular fa-circle-play"></i>
								</a>
							</div>
						</div>
					</div>
    `;
}