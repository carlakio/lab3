<body>
  <table>
    <tr>
      <td rowspan="2">
        <div id="profile-pic-container">
          <img id="slideshow-image" alt="Slideshow Image" width="100%">
        </div>
      </td>
      <th width="400px" height="50px">Who am I</th>
    </tr>
    <tr>
      <td>
        <ul>
          <li><strong>Name:</strong> Carl Louise Akio P. Agot</li>
          <li><strong>Hobbies:</strong> Playing Basketball, Playing sports, Sleeping</li>
          
          <li><strong>Favorite Game:</strong> Valorant</li>
          <li><strong>Age:</strong> 19</li>
          <li><strong>Religion:</strong> Catholic</li>
        </ul>
        
        
        <button id="show-more-btn" onclick="toggleMoreDetails()">Show More</button>
		<button onclick="goToNextPage()">Go to Next Page</button>
		
        
        
        <div id="more-details">
          <ul>
            <li><strong>Education:</strong> Currently studying Information of Technology at Asia Pacific College</li>
            <li><strong>Goals:</strong> Graduate, find a passionate job, and bring happiness to family</li>
			<li><strong>Experience:</strong> Slightly knowledgeable about Python and HTML. Also knows something about Computers specifically specifications about PC building.</li>
          </ul>
        </div>
      </td>
    </tr>
    <tr>
      <th colspan="2" height="50px">About me</th>
    </tr>
    <tr>
      <td colspan="2">
        <p>I chose this course because of my love for computers. I always wanted to know everything about computers as well as code websites. What are my goals in life? I want to graduate and have a job that I'm passionate about. I also want to be successful in life to give my parents and loved ones a happy life.</p>
      </td>
    </tr>
    <tr>
      <th colspan="2" height="50px">Socials</th>
    </tr>
    <tr>
      <td colspan="2">
        <p>Links to my socials</p>
        <ul>
          <li><a href="https://www.facebook.com/carl.agot.52/">Facebook</a></li>
          <li><a href="https://github.com/carlakio">Github</a></li>
        </ul>
      </td>
    </tr>
  </table>
  <?php
  $imageProperties = [    
    'src'    => 'images/tenor.gif',    
    'alt'    => 'bg pic',
    'background-size' => 'auto',
    'background-repeat' => 'no-repeat',
    'margin' => '0',
    'padding' => '0',
    'display' => 'flex',
       
];
 $script = [
  'defer' => null,
  'src' => 'js/script.js',
 ];

  $imageProperties1 = [    
    'src'    => 'images/profilepic.jpg',    
    'alt'    => 'prof pic',
    'opacity' => '0',
    'width' => '300px',
    'height' => '300px',
    'transition' => 'opacity 0.5s ease-in-out',
    'overflow' => 'hidden',
       
];


  
     

        echo img($imageProperties);
        echo img($imageProperties1);
        
       
        echo link_tag('css/styles.css');
        echo script_tag($script);
       
        
        
    ?>