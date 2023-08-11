/*FIlters*/

            document.querySelector("#filter-coding").addEventListener("change", filterCoding);
            document.querySelector("#filter-design").addEventListener("change", filterDesign);
            document.querySelector("#filter-marketing").addEventListener("change", filterMarketing);
            
    
            function filterCoding() {
                hideAllCards();
    
                if(document.querySelector("#filter-coding").checked) {
                    var codingCards = document.querySelectorAll(".coding");
                    codingCards.forEach(codingCard => {
                        codingCard.style.display = "inline-block";
                        
                    });
    
                    document.querySelector("#filter-design").checked = false;
                    document.querySelector("#filter-marketing").checked = false;
                } else {
                    showAllCards();
                    
                }
            }
    
            function filterDesign() {
                hideAllCards();
    
                if(document.querySelector("#filter-design").checked) {
                    var designCards = document.querySelectorAll(".design");
                    designCards.forEach(designCard => {
                        designCard.style.display = "inline-block";
                    });
    
                    document.querySelector("#filter-coding").checked = false;
                    document.querySelector("#filter-marketing").checked = false;
                } else {
                    showAllCards();
                }
            }
    
            function filterMarketing() {
                hideAllCards();
    
                if(document.querySelector("#filter-marketing").checked) {
                    var marketingCards = document.querySelectorAll(".marketing");
                    marketingCards.forEach(marketingCard => {
                        marketingCard.style.display = "inline-block";
                    });
    
                    document.querySelector("#filter-design").checked = false;
                    document.querySelector("#filter-coding").checked = false;
                } else {
                    showAllCards();
                }
            }
           
    
            function hideAllCards() {
                var allCards = document.querySelectorAll(".card");  
    
                allCards.forEach(card => {
                    card.style.display = "none";
            
                });
            }
    
            function showAllCards() {
                var allCards = document.querySelectorAll(".card");  
    
                allCards.forEach(card => {
                    card.style.display = "inline-block";
                }); 
            }

            /*Load More Button*/

            
            let loadMoreBtn = document.querySelector("#load-more");
            let currentItem = 3;
        
            loadMoreBtn.onclick = () => {
              let boxes = [
                ...document.querySelectorAll(".container .box-container .box"),
              ];
              for (var i = currentItem; i < currentItem + 3; i++) {
                if (boxes[i]) {
                  boxes[i].style.display = "inline-block";
                } else {
                  loadMoreBtn.style.display = "none";
                }
              }
              currentItem += 3;
            };

        
            
              /*Transition effect */
              
              window.onload = () => {
                const transition_el = document.querySelector(".transition");
                const anchors = document.querySelectorAll("a");
                setTimeout(() => {
                  transition_el.classList.remove("is-active");
                }, 500);
      
                for (let i = 0; i < anchors.length; i++) {
                  const anchor = anchors[i];
                  anchor.addEventListener("click", (e) => {
                    e.preventDefault();
                    let target = e.currentTarget.href;
      
                    transition_el.classList.add("is-active");
      
                    setTimeout(() => {
                      window.location.href = target;
                    }, 500);
                  });
                }
              };
     