<?php 


//build the channel icons 
function channel($id, $img, $alt, $title){
	return "<div class='col-md-3'>
      			<div class='channel'>
      				<button type='button' class='channel-text' data-bs-toggle='modal' data-bs-target='#{$id}'>
	      				<img class='img-fluid' src='imgs/{$img}.webp' alt='{$alt}.'>
	      			</button>
	      			<button type='button' class='channel-text' data-bs-toggle='modal' data-bs-target='#{$id}'>
  						{$title}
					</button>
	      		</div>
      		</div>";
}


//builds the modals
function modal_maker_edtech(){
	return "<div class='modal fade ' id='edtech' tabindex='-1' aria-labelledby='edtechModalLabel' aria-hidden='true'>
			  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
			    <div class='modal-content'>
			      <div class='modal-header'>
			        <h2 class='modal-title' id='edtechModalLabel'>Reclaim EdTech</h2>
			        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
			      </div>
			      <div class='modal-body'>
			      		<div class='row'>
					       <div class='col-md-6'>
						   		<img class='img-fluid col-img' src='imgs/transparent-neon-edtech-tv-1.webp' alt=''>
					       		<h3>What is Instructional Technology at Reclaim Hosting?</h3>
					       		<p>Simply put, this is professional development and intentional community support built specifically with Educational Technologists in mind.</p>
					       		<p>
					       		The tools we host are only as interesting as the people behind them, and it’s our goal to create a structure to help everyone explore, question, learn, and build the future of teaching and learning together. We are a niche support hub and learning community for curious minds and creative tinkerers, whether you have a background in Instructional Design, advanced IT Support, or sit somewhere in between.
					       		</p>
								<h3>What's on the horizon?</h3>
								<p>At any given time, we’re gearing up for a flex course, workshop, community chat, or impromptu stream. Check out the list of upcoming events or click on the following links to get involved:</p>
									<a class='blue-btn' href='https://reclaimed.tech/'>reclaim.tech</a>
									<a class='blue-btn' href='https://reclaimed.tech/discord'>Say hello on Discord</a>
									<a class='blue-btn' href='https://events.reclaimhosting.com/events/'>Upcoming Events</a>
					       </div>
					       <div class='col-md-6'>
						   <div id='ed-tech-events'></div>
					       </div>
					     </div>

			      </div>			     
			      <div class='modal-footer'>
			       <!--<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>-->
			      </div>
			    </div>
			  </div>
			</div>";
		}

function modal_maker_chat($id, $title){
	$html = <<<"EOT"
		<div class='modal fade ' id='$id' tabindex='-1' aria-labelledby='$id.ModalLabel' aria-hidden='true'>
			  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
			    <div class='modal-content'>
			      <div class='modal-header'>
			        <h2 class='modal-title' id='edtechModalLabel'>$title</h2>
			        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
			      </div>
			      <div class='modal-body'>
			      		<div class='row'>
					       <div class='col-md-6'>
					       		<h3>What's a Community Chat?</h3>
					       		<p>Community Chats are a chance for the Reclaim community to get together once a month in an informal setting and connect about different web technologies, working with Reclaim Hosting products, or discussing anything else that might be trending in higher ed.</p>
					       		<p>
					       		The monthly topic is chosen by the Reclaim team and announced a few weeks in advance. Community Chats are completely free, open for anyone to attend, and a great chance to get to know folks from other schools that might be running projects similar to yours.
					       		</p>
								<a class='blue-btn' href='https://reclaimed.tech/community-chats/'>Register for the next Community Chat</a>
								<a class='blue-btn' href='https://archive.reclaim.tv/w/p/rZqxbb5B4d5QR7kLzerwM8'>Community Chat Recordings</a>
								<h3>Latest Community Chat</h3>
								<div class="videoWrapper">
									<iframe title="Community Chats" src="https://archive.reclaim.tv/video-playlists/embed/d278fbb0-bff4-4dc5-b484-50375ac8d049" allowfullscreen="" sandbox="allow-same-origin allow-scripts allow-popups" width="560" height="315" frameborder="0"></iframe>
								</div>
								<div id='latest-chat'></div>
					       </div>
					       <div class='col-md-6'>
					       <img class='img-fluid col-img' src='imgs/Simple-logo-Community-Chat.png' alt='Community Chat logo.'>
						   <h3>Upcoming Community Chats</h3>
						   <div id='upcoming-chats'></div>
					       </div>
					     </div>
			      </div>			     
			      <div class='modal-footer'>
			       <!--<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>-->
			      </div>
			    </div>
			  </div>
			</div>
		EOT;

		echo $html;
}


function modal_maker_announcements($id, $title){
	$html = <<<"EOT"
		<div class='modal fade ' id='$id' tabindex='-1' aria-labelledby='$id.ModalLabel' aria-hidden='true'>
			  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
			    <div class='modal-content'>
			      <div class='modal-header'>
			        <h2 class='modal-title' id='edtechModalLabel'>$title</h2>
			        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
			      </div>
			      <div class='modal-body'>
			      		<div class='row'>
				      		<div class='col-md-12'>
				      			<img class='img-fluid' src='imgs/reclaimtheblog-vhs.webp' alt='VCR tape with Reclaim the blog written on it.'>
				      		</div>
					       <div class='col-md-6'>
						   		<img src='imgs/im-blogging.gif' class='img-fluid col-img' alt='I am blogging right now video of a guy drinking coffee.'>
					       		<h3>What does Reclaim talk about?</h3>
					       		<p>It’s no secret that there’s a lot going on at Reclaim Hosting. At any given time, we’re planning for upcoming trainings, scheduling out infrastructure maintenance and improvements, and even looking towards our next biennial Domains conference.</p>
					       		<p>
					       		Our internal team has a lot to say, too. We’re always narrating the work that we do by capturing our thinking blog posts, podcasts, and informal streams. We’re so appreciative that you want to tag along and be a part of the conversation. Stay in the know by checking out some of the following resources:
					       		</p>
								<h3>Other Announcements</h3>
								<p>Below you can find a list of quick links to various happenings at Reclaim Hosting. Like and subscribe!</p>
								<a class='blue-btn' href="https://blog.reclaimhosting.com">Reclaim the Blog</a>
								<a class='blue-btn' href="https://roundup.reclaimhosting.com/">The Reclaim Newsletter</a>
					       </div>
					       <div class='col-md-6'>
								<h3>Recent Blog Posts</h3>
								<div id='latest-posts'></div>
					       </div>
					     </div>
			      </div>			     
			      <div class='modal-footer'>
			       <!--<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>-->
			      </div>
			    </div>
			  </div>
			</div>
		EOT;

		echo $html;
	}


function modal_maker_forums($id, $title){
	$html = <<<"EOT"
		<div class='modal fade ' id='$id' tabindex='-1' aria-labelledby='$id.ModalLabel' aria-hidden='true'>
			  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
			    <div class='modal-content'>
			      <div class='modal-header'>
			        <h2 class='modal-title' id='edtechModalLabel'>$title</h2>
			        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
			      </div>
			      <div class='modal-body'>
			      		<div class='row'>
			      			<div class='col-md-12'>
			      				<img class='img-fluid' src='imgs/community-1210x423-1-1024x358.jpg'>
			      			</div>
					       <div class='col-md-6'>
					       		<h3>What are the Reclaim Community Forums?</h3>
					       		<p>The <a href="https://forums.reclaimhosting.com">community forums</a> are a space for general conversation relating to web hosting, domains, best practices, web software, and anything else trending in higher ed. We want this to be place for questioning, learning, and exploring. If you’re interested in more real-time conversation, check out our <a href=''>Discord server!</a></p>
					       		<h3>Popular Forum Topics</h3>
					       		<a href='https://forums.reclaimhosting.com/c/newbies/31' class='blue-btn'>Newbies Corner</a>
					       		<a href='https://forums.reclaimhosting.com/c/dooo/9' class='blue-btn'>Domain of One's Own</a>
					       		<a href='https://forums.reclaimhosting.com/c/cloud/36' class='blue-btn'>Reclaim Cloud</a>
					       </div>
					       <div class='col-md-6'>
						      <h3>Latest Forum Activity</h3>
						      <div id='latest-forum'></div>
					       </div>
					     </div>					      
			      </div>			     
			      <div class='modal-footer'>
			       <!--<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>-->
			      </div>
			    </div>
			  </div>
			</div>
		EOT;

		echo $html;
	}

function modal_maker_roundup($id, $title){
	$html = <<<"EOT"
		<div class='modal fade ' id='$id' tabindex='-1' aria-labelledby='$id.ModalLabel' aria-hidden='true'>
			  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
			    <div class='modal-content'>
			      <div class='modal-header'>
			        <h2 class='modal-title' id='edtechModalLabel'>$title</h2>
			        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
			      </div>
			      <div class='modal-body'>
			      		<div class='row'>
				      		
					       <div class='col-md-6'>
							<img src='imgs/Roundup-on-a-TV-1024x789.webp' id='roundup-img' class='img-fluid col-img' alt='An old TV cartoon with Reclaim Roundup on the screen.'>
					       		<h3>Reclaiming the Newsletter</h3>
					       		<p>A lot goes on backstage at Reclaim Hosting, and we want to share it all with you. The <a href='https://roundup.reclaimhosting.com/'>Reclaim Roundup</a> is published on the last day of each month and includes the following topics:</p>
					       		<ul>
					       			<li>Company Announcements (hiring, infrastructure maintenance, etc.)</li>
					       			<li>New support documentation &amp; other video tutorials/streams</li>
					       			<li>Event recaps &amp; what’s coming next month</li>
					       			<li>Blog Posts, Podcasts, and other conversations around the web</li>
					       			<li>Other Staff picks (like <a href="https://tholman.com/cursor-effects/" target="_blank" rel="noopener">90’s Cursor Effects</a>, you’re welcome)</li>
					       			<li>The greatest collection of GIFs of all time</li>
					       		</ul>
								<h3>Want to share something on the next Roundup?</h3>
								<p>We love to highlight cool things happening in the Reclaim community. Let us know at <a href="mailto:roundup@reclaimhosting.com">roundup@reclaimhosting.com</a>.</p>
								<a class='blue-btn' href="https://roundup.reclaimhosting.com/page/2/">Read Previous Issues</a>
								<a class='blue-btn' href="https://roundup.reclaimhosting.com/#/portal/signup">Subscribe to Reclaim Roundup</a>
								<a class='blue-btn' href="https://roundup.reclaimhosting.com/rss/">RSS Feed</a>
					       </div>
					       <div class='col-md-6'>
							  <h3>Latest Issue</h3>
							  <div id='latest-roundup'></div>
					       </div>
					     </div>
			      </div>			     
			      <div class='modal-footer'>
			       <!--<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>-->
			      </div>
			    </div>
			  </div>
			</div>
		EOT;

		echo $html;
	}




function modal_maker_support($id, $title){
	$html = <<<"EOT"
		<div class='modal fade ' id='$id' tabindex='-1' aria-labelledby='$id.ModalLabel' aria-hidden='true'>
			  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
			    <div class='modal-content'>
			      <div class='modal-header'>
			        <h2 class='modal-title' id='edtechModalLabel'>$title</h2>
			        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
			      </div>
			      <div class='modal-body'>
			      		<div class='row'>
				      		
					       <div class='col-md-6'>
					       		<h3>What does Support look like at Reclaim Hosting?</h3>
					       		<p>Support is rooted in almost everything we do at Reclaim, and it’s one of our key considerations when we think about upcoming events, plan for infrastructure improvements, and even hire new team members. We want everyone that engages with Reclaim Hosting to have a top-tier support experience, and that means that we aim to listen, teach, consult, and help out any way we can. For more information, read more about <a href='https://reclaimhosting.com/careers/'>our core values</a>.</p>
					       		<p>Support takes many shapes at Reclaim Hosting, including but not limited to: thorough responses in Support tickets, observing unique Service Level Agreements, regularly adding to our Support Documentation, creating Professional Development materials for upcoming trainings, jumping in on escalated Support calls, and monitoring our fleet of servers around the clock. </p>		
							   <img src='imgs/Simple-logo-Support.webp' class='img-fluid col-img' alt='Two people sitting on the word support.'>
					       </div>
					       <div class='col-md-6'>
							  <h3>Support Resources</h3>
					      		<p>Check out the following list of Reclaim Support resources:</p>
					      		<a class='blue-btn' href="https://support.reclaimhosting.com/hc/en-us">Support Documentation</a>
					      		<a class='blue-btn' href="https://reclaimhosting.com/category/announcements/infrastructure/">Infrastructure Announcements</a>
					      		<a class='blue-btn' href="https://status.reclaimhosting.com/">Server Monitoring & Status Reports</a>
					      		<a class='blue-btn' href="https://support.reclaimhosting.com/hc/en-us/requests/new/">Contact Reclaim Support</a>
								  <h3>Our Recently Updated Support Articles</h3>
								  <div id='support-comments'></div>
					       </div>
					     </div>
			      </div>			     
			      <div class='modal-footer'>
			       <!--<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>-->
			      </div>
			    </div>
			  </div>
			</div>
		EOT;

		echo $html;
	}




function modal_maker_tv($id, $title){
	$html = <<<"EOT"
		<div class='modal fade' id='$id' tabindex='-1' aria-labelledby='$id.ModalLabel' aria-hidden='true'>
			  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
			    <div class='modal-content'>
			      <div class='modal-header'>
			        <h2 class='modal-title' id='edtechModalLabel'>$title</h2>
			        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
			      </div>
			      <div class='modal-body'>
			      		<div class='row'>
			      		<div class='col-md-12'>
				      			<img class='img-fluid col-img' src='imgs/TV-Turnaround-2048x418.webp' alt='A series of TVs with Reclaim TV on the screens.'>
				      		</div>
				      		
					       <div class='col-md-6'>
					       		<h3>What is Reclaim TV?</h3>
					       		<p><a href="https://reclaim.tv">Reclaim TV</a> is a collection of of recordings from all things happening at Reclaim Hosting. As we slowly make the switch from YouTube, Reclaim TV will be our home base for archived events, podcast streams, and how-to videos.</p>
					       		<h3>Popular Playlists</h3>
					       		<a href='https://archive.reclaim.tv/w/p/rZqxbb5B4d5QR7kLzerwM8' class='blue-btn'>Previous Community Chats</a>
					       		<!-- <a href='https://community.reclaimhosting.com/#' class='blue-btn'>Video Documentation</a> -->
					       		<a href='https://today.reclaimhosting.com/' class='blue-btn'>Reclaim Today Podcast</a>
					       		
					       </div>
					       <div class='col-md-6'>
						     <h3>Latest Videos</h3>
						     <div id='latest-videos'></div>
					       </div>
					     </div>					     
			      </div>			     
			      <div class='modal-footer'>
			       <!--<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>-->
			      </div>
			    </div>
			  </div>
			</div>
		EOT;

		echo $html;
	}


function modal_maker_social($id, $title){
	$html = <<<"EOT"
		<div class='modal fade ' id='$id' tabindex='-1' aria-labelledby='$id.ModalLabel' aria-hidden='true'>
			  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
			    <div class='modal-content'>
			      <div class='modal-header'>
			        <h2 class='modal-title' id='edtechModalLabel'>$title</h2>
			        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
			      </div>
			      <div class='modal-body'>
			      		<div class='row'>			      	
				      		
					       <div class='col-md-6'>					       		
					       		<img class="img-fluid" id="social-stack" src='imgs/social-stack-copy.webp' alt='A stack of TVs with various Reclaim statements on them.'>
					       </div>
					       <div class='col-md-6'>
						    	<h3>Reclaim Hosting around the Web</h3>
						    	<p>Reclaim Hosting can be found on a number of social media accounts, and connecting with us on these platforms can be a great way to stay in the know or quickly get in touch. We use these tools to talk about the work we’re doing, highlight voices in the community, share upcoming maintenance, and more. </p>
						    	<h3>Say Hello & Follow Along</h3>
						    	<p>Like and subscribe, or use these platforms as a launching point to connect with others. We’d love to hear from you!</p>
							<a href='https://reclaim.rocks/@reclaimhosting/' class='blue-btn'>Follow @reclaimhosting@reclaim.rocks on Mastodon</a>
						    	<a href='https://twitter.com/ReclaimHosting' class='blue-btn'>Follow @ReclaimHosting on Twitter</a>
						    	<a href='https://reclaimed.tech/discord' class='blue-btn'>Join the Discord Server</a>
						    	<a href='https://today.reclaimhosting.com/' class='blue-btn'>Listen to the Reclaim Today Podcast</a>
						    	<a href='https://www.youtube.com/channel/UCnV3Y2x4MsQ-u7x4zeFsffA' class='blue-btn'>Like & Subscribe on YouTube</a>
						    	<a href='https://www.linkedin.com/company/reclaim-hosting/' class='blue-btn'>Connect on LinkedIn</a>
						    	<a href='https://reclaimhosting.com/about/#team' class='blue-btn'>Meet the Reclaim Team</a>
					       </div>
					     </div>					     
			      </div>			     
			      <div class='modal-footer'>
			       <!--<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>-->
			      </div>
			    </div>
			  </div>
			</div>
		EOT;

		echo $html;
	}

function json_fetcher($url,$name){
	// Create a stream
	// Set header text.
	$header =   "Content-type: application/json\r\n" .
	            "Accept: application/json\r\n" ;

	// Set options - POST.
	$opts = array("http" => 
	    array(
	        "method" => "GET",
	        "header" => $header,
	    )
	);

	// Create context and execute.
	$context = stream_context_create($opts);
	$result = file_get_contents($url, false, $context);

	// DOCS: https://www.php.net/manual/en/function.stream-context-create.php
	$context = stream_context_create($opts);
	$file = file_get_contents($url, false, $context);
   	//$destination = $_SERVER['HTTP_HOST'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], "/"));
  
   	file_put_contents(dirname(__FILE__)."/json/" . $name . ".json", $file);
}
