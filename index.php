<!DOCTYPE html>
<html>
<style>
* {
	box-sizing: border-box;
}
h1{
	text-align: center;
}
.outer-grid{
	display: flex;
	flex-wrap: wrap;
	padding: 0 4px;
}
.inner-grid{
	flex: 25%;
	max-width: 25%;
	padding: 0 0px;
	text-align: center;
	margin-left: 6%;
}
.inner-grid img{
	margin-top: 8px;
	width: 100%;
	padding: 10px;
}
@media screen and (max-width: 800px){
	.inner-grid{
		flex: 50%;
		max-width: 50%;
	}
}
@media screen and (max-width: 600px){
	.inner-grid{
		flex: 100%;
		max-width: 100%;
	}
}
</style>
<body>
<h1>My Plants Photo Gallery</h1>
<div class ="outer-grid">
<div class ="inner-grid">
<a href ="hoami.html"><img src="image4.JPG"></a>
<img src="image1.JPG">
<img src="image2.JPG">
</div>

<div class="inner-grid">
<img src="image3.JPG"/></a>
<img src="image5.JPG"/></a>
<img src="image6.JPG"/></a>
</div>

<div class="inner-grid">
<img src="image4.JPG"></a>
<img src="image1.JPG">
<img src="image2.JPG">
</div>
</div>
</body>
</html>