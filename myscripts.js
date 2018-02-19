console.log("Running");
var teamTwitter = {"teams":[
  {"team":"Bournemouth", "url":"a"},
  {"team":"Arsenal", "url":"s"},
  {"team":"Brighton", "url":"s"},
  {"team":"Burnley", "url":"h"},
  {"team":"Chelsea", "url":"o"},
  {"team":"Palace", "url":"l"},
  {"team":"Everton", "url":"e"},
  {"team":"Huddersfield", "url":"c"},
  {"team":"Leicester", "url":"u"},
  {"team":"Liverpool", "url":"n"},
  {"team":"Mancity", "url":"t"},
  {"team":"Manutd", "url":"s"},
  {"team":"Newcastle", "url":"h"},
  {"team":"Southampton", "url":"i"},
  {"team":"Stoke", "url":"t"},
  {"team":"Swansea", "url":"h"},
  {"team":"Spurs", "url":"e"},
  {"team":"Watford", "url":"a"},
  {"team":"Westbrom", "url":"d"},
  {"team":"Westham", "url":"s"}
]};
document.querySelectorAll('.grid-box').addEventListener('click', swapTwitter);

function getTwitter(div1,div2)
{
    d1 = document.querySelector('twitter-widget-0');
    d2 = document.querySelector('#twitter2');
    if( d2.style.display == "none" )
    {
      d1.style.display = "none";
      d2.style.display = "block";
    }
    else
    {
      d1.style.display = "block";
      d2.style.display = "none";
  }
}

/*  if (document.querySelector('.overlord').childNodes.length < 2 ){
    var otherScript = document.createElement('<a id="yeet2" class="twitter-timeline" data-lang="en" data-width="400" data-height="500" data-theme="dark" href="https://twitter.com/LFC?ref_src=twsrc%5Etfw">Tweets by LFC</a> <script src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>')
    document.querySelector('.overlord').appendChild(otherScript);
    d1 = document.querySelector('#twitter-widget-0');
    d2 = document.querySelector('#twitter-widget-1');
    d1.style.display = "none";
    d2.style.display = "block";
  } else {*/

function swapTwitter(){
  console.log(this.id);
  document.querySelector('.twitter-timeline').href = newurl
}
