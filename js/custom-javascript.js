jQuery(document).ready(function($) {
  class Search {
    // 1. describe and create/initiate our object
    constructor() {
      this.addSearchHTML();
      this.resultsDiv = $("#search-overlay__results");
      this.openButton = $(".js-search-trigger");
      this.closeButton = $(".search-overlay__close");
      this.searchOverlay = $(".search-overlay");
      this.searchField = $("#search-term");
      this.events();
      this.isOverlayOpen = false;
      this.isSpinnerVisible = false;
      this.previousValue;
      this.typingTimer;
    }

    // 2. events
    events() {
      this.openButton.on("click", this.openOverlay.bind(this));
      this.closeButton.on("click", this.closeOverlay.bind(this));
      $(document).on("keydown", this.keyPressDispatcher.bind(this));
      this.searchField.on("keyup", this.typingLogic.bind(this));
    }

    // 3. methods (function, action...)
    typingLogic() {
      if (this.searchField.val() != this.previousValue) {
        clearTimeout(this.typingTimer);

        if (this.searchField.val()) {
          if (!this.isSpinnerVisible) {
            this.resultsDiv.html('<div class="spinner-loader"></div>');
            this.isSpinnerVisible = true;
          }
          this.typingTimer = setTimeout(this.getResults.bind(this), 750);
        } else {
          this.resultsDiv.html("");
          this.isSpinnerVisible = false;
        }
      }
      this.previousValue = this.searchField.val();
    }

    getResults() {
      $.getJSON(
        `${
          understrapData.root_url
        }/wp-json/understrap/v1/search?term=${this.searchField.val()}`,
        results => {
          this.resultsDiv.html(`
          <div class="row">
            <div class="col">
              <h2 class="search-overlay__section-title">Recursos</h2>
              ${
                results.resources.length
                  ? '<ul class="link-list min-list">'
                  : `<p>No existen resultados con esa busqueda. <a href="${
                      understrapData.root_url
                    }/">Ver todos los recursos</a></p>`
              }
                ${results.resources
                  .map(
                    item =>
                      `<li><a href="${item.permalink}">${item.title}</a> ${
                        item.postType == "post" ? `by ${item.authorName}` : ""
                      }</li>`
                  )
                  .join("")}
                  ${results.resources.length ? "</ul>" : ""}
            </div>
            <div class="col">
              <h2 class="search-overlay__section-title">Categorias</h2>
              ${
                results.categories.length
                  ? '<ul class="link-list min-list">'
                  : `<p>No existen resultados con esa busqueda. <a href="${
                      understrapData.root_url
                    }/">Ver todos los recursos</a></p>`
              }
                ${results.categories
                  .map(
                    item =>
                      `<li><a href="${item.permalink}">${item.title}</a> ${
                        item.postType == "post" ? `by ${item.authorName}` : ""
                      }</li>`
                  )
                  .join("")}
                  ${results.categories.length ? "</ul>" : ""}
            </div>
            <div class="col">
              <h2 class="search-overlay__section-title">Información General</h2>
              ${
                results.generalInfo.length
                  ? '<ul class="link-list min-list">'
                  : "<p>No existen resultados con esa busqueda.</p>"
              }
                ${results.generalInfo
                  .map(
                    item =>
                      `<li><a href="${item.permalink}">${item.title}</a> ${
                        item.postType == "post" ? `by ${item.authorName}` : ""
                      }</li>`
                  )
                  .join("")}
                  ${results.generalInfo.length ? "</ul>" : ""}
            </div>
          </div>
        `);
          this.isSpinnerVisible = false;
        }
      );
    }

    keyPressDispatcher(event) {
      if (
        event.keyCode === 83 &&
        !this.isOverlayOpen &&
        !$("input, textarea").is(":focus")
      ) {
        this.openOverlay();
      } else if (event.keyCode === 27 && this.isOverlayOpen) {
        this.closeOverlay();
      }
    }

    openOverlay(event) {
      this.searchOverlay.addClass("search-overlay--active");
      $("body").addClass("body-no-scroll");
      if (event && event.type == "click") {
        event.preventDefault();
      }
      this.searchField.val("");
      setTimeout(() => this.searchField.focus(), 301);
      this.isOverlayOpen = true;
    }

    closeOverlay() {
      this.searchOverlay.removeClass("search-overlay--active");
      $("body").removeClass("body-no-scroll");
      this.isOverlayOpen = false;
    }

    addSearchHTML() {
      $("body").append(`
      <div class="search-overlay">
      <div class="search-overlay__top">
        <div class="container">
          <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
          <input type="text" class="search-term" placeholder="¿Qué está buscando?" id="search-term">
          <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
        </div>
      </div>
    
      <div class="container">
        <div id="search-overlay__results"></div>
      </div>
    
    </div>
      `);
    }
  }

  const liveSearch = new Search();

  // It stops modal video when user closes modal
  $(".modal").each(function() {
    var src = $(this)
      .find("iframe")
      .attr("src");

    $(this).on("click", function() {
      $(this)
        .find("iframe")
        .attr("src", "");
      $(this)
        .find("iframe")
        .attr("src", src);
    });
  });

  var typed = new Typed("#typed", {
    stringsElement: "#typed-strings",
    loop: true,
    typeSpeed: 100,
    backSpeed: 60,
    backDelay: 2000
  });
});
