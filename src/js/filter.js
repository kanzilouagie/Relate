{
  const $filterForm = document.querySelector(`.filter`),
    $events = document.querySelector(`.verhalen_grid`);
  // const $routes = document.getElementsByClassName(`event_locatie_info`);

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`change`, handleSubmitFilterForm);
    }
    // for (let i = 0;i < $routes.length;i ++) {
    //   $routes[i].addEventListener(`click`, handleFindLocation);
    // }
  };

  const handleLoadEvents = data => {
    $events.innerHTML = data['verhalen']
      .map(event => createEventListItem(event))
      .join(``);
  };

  const createEventListItem = (event, img, pic, anonymous) => {
     if (event['published'] == true) {
      if (event['type'] === 'video') {
        img = `<img width="200" src="./assets/videos/stories/${event['text_pic']}" alt="${event['text_pic']}">`;
        pic = `<img src="./assets/images/upload_manieren_video.png" alt="feather">`;
      }
      if (event['type'] === 'audio') {
        img = `<img width="200" src="./assets/audio/stories/${event['text_pic']}" alt="${event['text_pic']}">`;
        pic = `<img src="./assets/images/upload_manieren_spraak.png" alt="feather">`;
      }
      if (event['type'] === 'text') {
        img = `<img width="200" src="./assets/images/stories/${event['text_pic']}" alt="${event['text_pic']}">`;
        pic = `<img src="./assets/images/upload_manieren_write.png" alt="feather">`;
      }

      if (event['anonymous'] === 1) {
        anonymous = 'anonymous';
      } else {
        anonymous = event['name'];
      }

      return `<div class="story_box">
          <a class="story_box__link" href="index.php?page=detail&id=${event['id']}">
            ${img}
            <div class="box_info">
              <div class="box_info__left">
                <p class="box_info__title">${event['story_name']}</p>
                <p class="box_info__relates">${event['relates']} relates</p>
              </div>
                <div class="box_info__right">
                ${pic}
                <p class="box_info__user">by ${anonymous}</p>
              </div>
            </div>
          </a>
      </div>`;
    }    };

  const handleSubmitFilterForm = e => {
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
        headers: new Headers({
          Accept: `application/json`
        }),
        method: 'get'
      })
      .then(r => r.json())
      .then(data => handleLoadEvents(data));
    window.history.pushState({},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  init();
}
