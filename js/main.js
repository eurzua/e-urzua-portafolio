{

	// Preload all the images in the page..
	imagesLoaded(document.querySelectorAll('img'), () => {
		document.body.classList.remove('loading');
    });
  };