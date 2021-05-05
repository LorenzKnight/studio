// var contentApi = document.querySelector('#students');
// function traer() {
//     fetch('https://loopsdancestudio.se/admin/students_api.php')
//     .then(res => res.json())
//     .then(data => {
//         console.log(data)
//         // contentApi.innerHTML = `<tr height="">
//         //     <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">
//         //         ${data.todos['0'].student}
//         //     </td>
//         //     <td width="15%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px;">
                
//         //     <td>
//         // </tr>`;
//     })
// }

function fetchData() {
    fetch("http://localhost:8888/admin/students_api.php")
      .then(res => res.json())
      .then(data => {
        fetchedData = data;
        console.log(data)
        // for (let i = 0; i < fetchedData.length; i++) {
        //   console.log(fetchedData[i].artist)
        // //   let listElement = document.createElement("li");
        // //   let titleElement = document.createElement("h3");
        // //   titleElement.innerText = fetchedData[i].artist;
        // //   titleElement.dataset.artistID = i;
        // //   listElement.appendChild(titleElement)
        // //   artistList.appendChild(listElement);
        // }
        // artistList.addEventListener('click', renderSongList)
      }
      )
  }
  window.onload = fetchData();