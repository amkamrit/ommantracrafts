
@extends('layouts.front.appFrontSec')



@section('content')

	<style>
    #first{
    	float:right;
    	
    }
    #vid
    {
      height:500px;
      
      float:center;
    }
   
    

    #one{
 
 background-size: cover;
  background-position: center bottom;
  overflow:hidden;
  margin:10px;
}
#one-wrp{overflow:hidden;position:relative;}
#one:before{
content:'';
  width:150%;
      left:-40%;
  background:#d0dcef;
  height:100%;
  position:absolute;
      top:100%;

      transform-origin:top center;
      transform: rotate(10deg);// translateY(-30px);
}
#one:after{
content:'';
  width:150%;
      right:-40%;
  background:#d0dcef;
  height:100%;
  position:absolute;
      top:100%;      
      transform-origin:50% 0%;
      transform: rotate(-10deg);// translateY(-30px);
}


</style>
	<title>About US</title>
</head>
<body>

     <div class="container-fluid">
      
      

      <div class="embed-responsive embed-responsive-16by9" id="vid">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
     </div>


  <div class="jumbotron" id=one>
    <h1>Vision And Mission</h1>
<p>Om mantra is a movement of producers wholesalers, retailers and advocates working to promote social
economic and environmental justice. Some of the principles of fair trade include; fair wages.
Environmental sustainable practices, safe and healthy working conditions, financial and technical support,
long term relationship, and respect for cultural identity. When you purchase from Om mantra you join a
network that enables village artisans to stay on their land and with their families. They don’t have to leave
for weeks at a time to work at far away factories. These artisans can now support their families, improve
village economics, and strengthen the economic position for artisans and gender equality through this
process of direct trade and fair prices. In this partnership, Nepal artisans express their artistic talents and
spur their creativity is developing unique lines of craft accessories. This empowers them to conserve their
cultural traditions in a financially viable way. Their creative freedom allows us to provide unique and
high quality hand crafted items to you. At the deepest essence, our mission is to create a direct link
between you and the many talented artisans in Nepal.</p>

<h1>Om mantra and Ethical policy</h1>

<p>AA Handicrafts support and promote fair trade principles in all aspects of the business. We only sell our
products from suppliers who source products from local artists, communities and craftsmen. We believe
that producers should be representative of the religions and communities of the area and both male and
female craftsmen are employed through the various stages of production. AA Handicrafts believe that
education is critical to any community. As such child labor is not tolerated. we visit the producers that we
work with regularly to inspect production conditions and to maintain personal relationships with the
craftsmen. We aim to ensure that products are made from sustainable and legal raw materials through
carefully chosen suppliers. All shipping materials should be recyclable. We aim to recycle and re-use
wherever possible and are supplied with green energy.</p>

<h1>Cultural Crafts…</h1>

<p>Nepal’s cultural craft heritage is particularly impressive considering the range of different crafts and the
range of different culturally identifiable artisan communities. For example, Nepal is famous for its Wood
Carving, Cotton Cloth, Nepalese paper, Tibetan Handicraft, Tibetan Incense, Buddhist and Hindu statue,
woolen item and the particularly unique costumes and jewelry of Tibetan Design and Nepalese Design.
These artistic traditions are sometimes divided into groups.</p>

    

  </div>




  </div>
</div>
 @endsection


       


