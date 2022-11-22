
//https://communitydev.reclaimhosting.com/
//https://docs.google.com/document/d/1ogk8Bv4ozO0ThviYJrqd7e-DsoZIeSIq0UBWv4za-Us/edit#
doTheEdtech();
doTheChat();
doTheAnnounce();
doTheForums();
doTheRoundup();
doTheSupport();
doTheTV();


/*
**
**    reclaim edtech
**
*/
function doTheEdtech(){
	const url = 'https://www.reclaimhosting.com/wp-json/tribe/events/v1/events';
	const data = edTechFetch(url);
}

async function edTechFetch(url) {
	   fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
        	//console.log(data.events)
            edTechList(data.events);
        })
        .catch(function (err) {
            console.log('error: ' + err);
        });
	}


function edTechList(data){
	const destination = document.getElementById("ed-tech-events");
	const preview = data;	
	let postCount = 0;
         preview.forEach((element) => {
            const link = element.url;
            const title = element.title;
            const excerpt = element.excerpt;
            const day = element.start_date_details.day;
            const month = monthTranslator(element.start_date_details.month);
            const year = element.start_date_details.year;
            const date = `<div class="day">${day}</div><div class="month"> ${month}</div>`;
            //const author = element._embedded.author[0].name;
            //const image = element.feature_image;
            if (postCount < 6) {
            	postCount = postCount+1;
	            const div = document.createElement("div");
	            div.classList.add('events-past');
	            div.innerHTML = `
	            			<div class="event">
	            				<div class="cal-block">
		            				${date}
			            		</div> 
			            		<div class="cal-info">
			            			<div class="link"><a href="${link}">${title}</a></div>
			            			<div class="event-excerpt">
			            				${excerpt}
			            			</div>
			            		</div>	            			
		            		</div>`;
	            destination.appendChild(div);

            }
            
        });
}

function monthTranslator(monthNumber){
	 const date = new Date();
	 date.setMonth(monthNumber - 1);

	  return date.toLocaleString('en-US', { month: 'short' });
}


/*
**
**    community chats
**
*/
function doTheChat(){
	const url = 'https://www.reclaimhosting.com/wp-json/tribe/events/v1/events?categories=742&per_page=5&_embed';
	const data = chatFetch(url);
}

async function chatFetch(url) {
	   fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
        	//console.log(data.events)
            makeChatList(data.events);
        })
        .catch(function (err) {
            console.log('error: ' + err);
        });
	}


function makeChatList(data){
	const destination = document.getElementById("upcoming-chats");
	const preview = data;	
	let postCount = 0;
         preview.forEach((element) => {
            const link = element.url;
            const title = element.title;
            const excerpt = element.excerpt;
            const date = element.date.slice(0, 10);
            //const author = element._embedded.author[0].name;
            //const image = element.feature_image;
            if (postCount < 6) {
            	postCount = postCount+1;
	            const div = document.createElement("div");
	            div.classList.add('chats-past');
	            div.innerHTML = `
	            			<div class="prev-chat">
		            			<div class="link"><a href="${link}">${title}</a></div> 
		            			<div class="meta">${date}</div>
		            			<div class="roundup-excerpt">
		            				${excerpt}
		            			</div>	            			
		            		</div>`;
	            destination.appendChild(div);

            }
            
        });
}


/*
**
**    announcements
**
*/


function doTheAnnounce(){
	const url = 'https://www.reclaimhosting.com/wp-json/wp/v2/posts?per_page=5&_embed&_embed';
	const data = announceFetch(url);
}

async function announceFetch(url) {
	  fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
        	makeAnnounceList(data);
        })
        .catch(function (err) {
            console.log('error: ' + err);
        });
	}


function makeAnnounceList(data){
	const destination = document.getElementById("latest-posts");
	const preview = data;	
         preview.forEach((element) => {
         	//console.log(element)
            const link = element.link;
            const title = element.title.rendered;
            const excerpt = element.excerpt.rendered;
            const date = element.date.slice(0, 10);
            const author = element._embedded.author[0].name;
            const image = element.featured_image;//	removed from template bc no imgs <img src="${image}" alt="" class="post-img">
            const div = document.createElement("div");
            let postCount = 0;
            if(postCount < 6){
            	postCount = postCount+1;
            	div.classList.add('chats-past');
	            div.innerHTML = `
	            			<div class="prev-chat">
		            			<div class="link"><a href="${link}">${title}</a></div> 
		            			<div class="meta">${date}</div>
		            			<div class="round-up-excerpt">
		            				${excerpt}
		            			</div>	            			
		            		</div>`;
	            destination.appendChild(div);

            }
            
        });
}


/*
**
**    forums
**
*/


function doTheForums(){
	const url = 'json/community.json';
	const data = forumsFetch(url);
}

async function forumsFetch(url) {
	  fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
        	//console.log(data)
        	makeForumsList(data);
        })
        .catch(function (err) {
            console.log('error: ' + err);
        });
	}


function makeForumsList(data){
	const destination = document.getElementById("latest-forum");
	const preview = data.latest_posts;	
	let postCount = 0;
         preview.forEach((element) => {
         	const name = element.name;
         	const status = element.action_code;

         	if(status != 'autoclosed.enabled' && postCount < 5){// avoid auto close posts
         		postCount = postCount+1;
         		const author = element.display_username;
         		let postNumber = '';
         		if (element.hasOwnProperty('post_number')){
         			const postNumber = element.post_number;
         		} 
         		const slug = element.topic_slug;
         		const link = `https://community.reclaimhosting.com/t/${slug}/${element.topic_id}/${postNumber}`;
	            const title = element.topic_html_title;
	            const excerpt = element.raw.slice(0, 100) + ' . . .';
	            const date = element.created_at.slice(0, 10);
	            const avatar = element.avatar_template.replace('{size}', '45');
	            const image = `https://community.reclaimhosting.com/${avatar}`;
	            //console.log(image)
	            const div = document.createElement("div");
	            div.classList.add('chats-past');
	            div.innerHTML = `
	            			<div class="prev-discourse">
	            				<div class="img-holder">
	            					<img class="discourse-img" src="${image}" alt="Avatar image for ${author}.">
	            				</div>
	            				<div class="data-holder">
			            			<div class="link"><a href="${link}">${title}</a></div> 
			            			<div class="meta">${date}</div>
			            			<div class="discourse-excerpt">
			            				${excerpt}
			            			</div>	            			
			            		</div>
		            		</div>`;
	            destination.appendChild(div);
         	}           
        });
}




/*
**
**    round up
**
*/
function doTheRoundup(){
	const url = 'https://roundup.reclaimhosting.com/ghost/api/content/posts/?key=b1cf99e241a17011aca62c7913&limit=1';
	const data = roundupFetch(url);
}


async function roundupFetch(url) {
	  const response = await fetch(url);
	  const data = await response.json();
	  makeRoundUp(data);
}



function makeRoundUp(data){
	const destination = document.getElementById("latest-roundup");
	const preview = data.posts;
         preview.forEach((element) => {
            const link = element.url;
            const title = element.title;
            const excerpt = element.excerpt;
            const image = element.feature_image;
            const div = document.createElement("div");
            div.classList.add('neato');
            div.innerHTML = `
            			<div class="round-up-new">
            				<img src="${image}" class="img-fluid" alt="Featured image for ${title}">
	            			<div class="link"><a href="${link}">${title}</a></div> 
	            			<div class="roundup-excerpt">${excerpt} . . . </div>
	            			<a class="read-more" href="${link}">Read the rest of the Roundup</a>
	            		</div>`;
            destination.appendChild(div);
        });
}




/*
**
**    support
**
*/
function doTheSupport(){
	const url = 'json/zen.json';
	const data = supportFetch(url);
}


async function supportFetch(url) {
	  const response = await fetch(url);
	  const data = await response.json();
	  //console.log(data);
	  makeSupport(data);
}



function makeSupport(data){
	const destination = document.getElementById("support-comments");
	const preview = data.articles;
	let postCount = 0;
         preview.forEach((element) => {
       		//console.log(element);
       		if(postCount < 5){
       			postCount = postCount+1;
       			const link = element.html_url;
	            const title = element.name;
	            const excerpt = '';//element.body;
	            // const image = element.feature_image;
	            const div = document.createElement("div");
	            div.classList.add('zen');
	            div.innerHTML = `
	            			<div class="zen-new">
		            			<div class="link"><a href="${link}">${title}</a></div> 
		            		</div>`;
	            destination.appendChild(div);
       		}  	
            
        });
}



/*
**
**    reclaim tv
**
*/


function doTheTV(){
	const url = 'https://archive.reclaim.tv/feeds/videos.json';
	const data = tvFetch(url);
}

async function tvFetch(url) {
	  const response = await fetch(url);
	  const data = await response.json();
	  makeTVList(data);
	}


function makeTVList(data){
	const destination = document.getElementById("latest-videos");
	const preview = data.items;
	//console.log(preview);
	let postCount = 0;
         preview.forEach((element) => {
         	postCount = postCount+1;
         	//console.log(postCount)
            if(postCount < 6){
            	const link = element.url;
	            const title = element.title; 
	            const content = element.content_html;           
	            const div = document.createElement("div");
	            div.classList.add('tv-past');
            	 div.innerHTML = `
            			<div class="prev-tv">
	            			<div class="link"><a href="${link}">${title}</a></div>
	            			<div class="tv-excerpt">${content}</div> 	            			            			
	            		</div>`;
            destination.appendChild(div);
        }           
        });
}



