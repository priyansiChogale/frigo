<?php session_start();
 define('CSSPATH', 'Static/CSS/'); //define css path
 $cssItem = 'style2.css'; //css item to display

//  define('CSSPATH', 'Static/CSS/'); //define css path
 $cssItem1 = 'style.css'; //css item to display

 include 'conn.php';

//$pname = $_POST['pname'];
//$pexpiry = $_POST['pexpiry'];
$tablename = $_SESSION['username'];

 $s2 = "select pname from $tablename WHERE pexpiry > CURDATE() order by pexpiry DESC";
 $result2 = mysqli_query($con, $s2);
 $num2 = mysqli_num_rows($result2);
 ?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find Meal For Your Ingredients</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css" />
  <!-- <link rel="stylesheet" href="\Static\CSS\style2.css" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem1"); ?>" type="text/css" />
    <!-- <link rel="stylesheet" href="\Static\CSS\style.css" /> -->
</head>
<body>
<header>
    <div class="container-fluid pb-3">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <i class="mx-3"></i>Frigo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-right text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="addProducts.php" style="font-size: 1.2rem;">Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn" href="index.php" role="button"
                            style="font-size: 1.2rem; border: 2px solid white; color: white;">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
  <div class = "container">
    <div class = "meal-wrapper">
      <div class = "meal-search">
        <h2 class = "title">Find Meals For Your Ingredients</h2>
        <blockquote>Real food doesn't have ingredients, real food is ingredients.<br>
          <cite>- Jamie Oliver</cite>
        </blockquote>

        <div class = "meal-search-box">
          <input type = "text" class = "search-control" placeholder="Enter an ingredient" id = "search-input">
          <button type = "submit" class = "search-btn btn" id = "search-btn">
            <i class = "fas fa-search"></i>
          </button>
        </div>
      </div>

      <div class = "meal-result">
        <h4 class = "title">Some recipes for you:</h4>
        <div id= "meal">
          <!-- meal item -->
          <!-- <div class = "meal-item">
            <div class = "meal-img">
              <img src = "food.jpg" alt = "food">
            </div>
            <div class = "meal-name">
              <h3>Potato Chips</h3>
              <a href = "#" class = "recipe-btn">Get Recipe</a>
            </div>
          </div> -->
          <!-- end of meal item -->
        </div>
      </div>


      <div class = "meal-details">
        <!-- recipe close btn -->
        <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn">
          <i class = "fas fa-times"></i>
        </button>

        <!-- meal content -->
        <div class = "meal-details-content">
          <!-- <h2 class = "recipe-title">Meals Name Here</h2>
          <p class = "recipe-category">Category Name</p>
          <div class = "recipe-instruct">
            <h3>Instructions:</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo blanditiis quis accusantium natus! Porro, reiciendis maiores molestiae distinctio veniam ratione ex provident ipsa, soluta suscipit quam eos velit autem iste!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet aliquam voluptatibus ad obcaecati magnam, esse numquam nisi ut adipisci in?</p>
          </div>
          <div class = "recipe-meal-img">
            <img src = "food.jpg" alt = "">
          </div>
          <div class = "recipe-link">
            <a href = "#" target = "_blank">Watch Video</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <footer id="contact-section">
    <div class="container-fluid p-0">
        <div class="row text-left">
            <div class="col-md-5 col-sm-5">
                <h4 class="text-light">Contact Us</h4>
                <p class="text-muted">Phone: +91 12345 67891</p>
                <p class="text-muted">Email id: queries@frigo.com
                </p>
            </div>
            <div class="col-md-5 col-sm-12">
                <h4 class="text-light">New Offers!</h4>
                <p class="text-muted">Stay Updated</p>
                <form class="form-inline">
                    <div class="col pl-0">
                        <div class="input-group pr-5">
                            <input type="text" class="form-control bg-dark text-white"
                                id="inlineFormInputGroupUsername2" placeholder="Email">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <button>
                                        <i class="fas fa-arrow-right"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2 col-sm-12">
                <h4 class="text-light">Follow Us</h4>
                <p class="text-muted">Let us be social</p>
                <div class="column text-light">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

  <script type="text/javascript">

    const searchBtn = document.getElementById('search-btn');
const mealList = document.getElementById('meal');
const mealDetailsContent = document.querySelector('.meal-details-content');
const recipeCloseBtn = document.getElementById('recipe-close-btn');

<?php
        if($num2 > 0){
          $count = 0;
          $a=[];
          while($count<2 and $row = mysqli_fetch_assoc($result2)){
            $a[$count] = $row['pname'];
            $count =+ 1;
          }
        }?>
        const x = <?php echo json_encode($a); ?>;
        let html = "";
        for(let i=0;i<2;i++)
        {
         
         console.log(x[i]);
        
        
        
        fetch(`https://www.themealdb.com/api/json/v1/1/filter.php?i=${x[i]}`)
    .then(response => response.json())
    .then(data => {
        
        if(data.meals){
            data.meals.forEach(meal => {
                html += `
                    <div class = "meal-item" data-id = "${meal.idMeal}">
                        <div class = "meal-img">
                            <img src = "${meal.strMealThumb}" alt = "food">
                        </div>
                        <div class = "meal-name">
                            <h3>${meal.strMeal}</h3>
                            <a href = "#" class = "recipe-btn">Get Recipe</a>
                        </div>
                    </div>
                `;
            });
            mealList.classList.remove('notFound');
        }else
        {
           // html = "Sorry, we didn't find any meal!";
            mealList.classList.add('notFound');
        }

        mealList.innerHTML = html;
    });
  }
       // document.write(x);

// event listeners
searchBtn.addEventListener('click', getMealList);
mealList.addEventListener('click', getMealRecipe);
recipeCloseBtn.addEventListener('click', () => {
    mealDetailsContent.parentElement.classList.remove('showRecipe');
});



// get meal list that matches with the ingredients
function getMealList(){
    let searchInputTxt = document.getElementById('search-input').value.trim();
    
      if(searchInputTxt != "")
      {
       
    fetch(`https://www.themealdb.com/api/json/v1/1/filter.php?i=${searchInputTxt}`)
    .then(response => response.json())
    .then(data => {
        let html = "";
        if(data.meals){
            data.meals.forEach(meal => {
                html += `
                    <div class = "meal-item" data-id = "${meal.idMeal}">
                        <div class = "meal-img">
                            <img src = "${meal.strMealThumb}" alt = "food">
                        </div>
                        <div class = "meal-name">
                            <h3>${meal.strMeal}</h3>
                            <a href = "#" class = "recipe-btn">Get Recipe</a>
                        </div>
                    </div>
                `;
            });
            mealList.classList.remove('notFound');
        }else
        {
            html = "Sorry, we didn't find any meal!";
            mealList.classList.add('notFound');
        }

        mealList.innerHTML = html;
    });

}
html="Please enter the ingredient name";
mealList.innerHTML = html;
}



// get recipe of the meal
function getMealRecipe(e){
    e.preventDefault();
    if(e.target.classList.contains('recipe-btn')){
        let mealItem = e.target.parentElement.parentElement;
        fetch(`https://www.themealdb.com/api/json/v1/1/lookup.php?i=${mealItem.dataset.id}`)
        .then(response => response.json())
        .then(data => mealRecipeModal(data.meals));
    }
}

// create a modal
function mealRecipeModal(meal){
    console.log(meal);
    meal = meal[0];
    let html = `
        <h2 class = "recipe-title">${meal.strMeal}</h2>
        <p class = "recipe-category">${meal.strCategory}</p>
        <div class = "recipe-instruct">
            <h3>Instructions:</h3>
            <p>${meal.strInstructions}</p>
        </div>
        <div class = "recipe-meal-img">
            <img src = "${meal.strMealThumb}" alt = "">
        </div>
        <div class = "recipe-link">
            <a href = "${meal.strYoutube}" target = "_blank">Watch Video</a>
        </div>
    `;
    mealDetailsContent.innerHTML = html;
    mealDetailsContent.parentElement.classList.add('showRecipe');
}


    
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>