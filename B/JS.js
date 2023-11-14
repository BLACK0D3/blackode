function grlB() {
    const posibleCb = 'BLACKODEISTHE00000101010';
    const riB = Math.floor(Math.random() * posibleCb.length);
    return posibleCb.charAt(riB);}
  const b = document.getElementById('b');
  function displayRandomLettersFor2Seconds() {
    let intervaloB;
    const duration = 1500; 

    intervaloB = setInterval(function() {
      const randomLetterB = grlB();
      b.textContent = randomLetterB;
    }, 150);

    setTimeout(function() {
        clearInterval(intervaloB);
        b.textContent = 'B',

          function grlB() {}
          const l = document.getElementById('l');
          function displayRandomLettersFor26mS() {
          let intervalId;
          const duration = 900; 

          intervalId = setInterval(function() {
            const randomLetter = grlB();
            l.textContent = randomLetter;
          }, 150),

          setTimeout(function() {
            clearInterval(intervalId);
            l.textContent = 'L';
            }, duration);
          }
          displayRandomLettersFor26mS(),

          function grlB() {}
          const a = document.getElementById('a');
          function displayRandomLettersFor2Seconds() {
                let intervaloB;
                const duration = 1800; 

                intervaloB = setInterval(function() {
                  const randomLetterB = grlB();
                  a.textContent = randomLetterB;
                }, 300);

                setTimeout(function() {
                  clearInterval(intervaloB);
                  a.textContent = 'A',

                  function grlB() {
                    
                  }
                  const o = document.getElementById('o');
                  function displayRandomLettersFor14Seconds() {
    let intervalId;
    const duration = 600; 

    intervalId = setInterval(function() {
      const randomLetter = grlB();
      o.textContent = randomLetter;
    }, 200);

    setTimeout(function() {
      clearInterval(intervalId);
      o.textContent = 'O';
    }, duration);
  }
                  displayRandomLettersFor14Seconds();
                  ;
                    }, duration);
                  }
          displayRandomLettersFor2Seconds(),

          function grlB() {}
          const c = document.getElementById('c');
          function displayRandomLettersFor3Seconds() {
            let intervalId;
            const duration = 1000; 

            intervalId = setInterval(function() {
              const randomLetter = grlB();
              c.textContent = randomLetter;
            }, 250);

            setTimeout(function() {
              clearInterval(intervalId);
              c.textContent = 'C';
            }, duration);
          }
          displayRandomLettersFor3Seconds();

           
      }, duration);
    }
    displayRandomLettersFor2Seconds();  

    function grlK() {
    const possibleCk = 'KODEFORBLACKODE';
    const randomIndex = Math.floor(Math.random() * possibleCk.length);
    return possibleCk.charAt(randomIndex);
  }
    const k = document.getElementById('k');
    function displayRandomLettersFor15mS() {
                    let intervalId;
                    const duration = 2000; 

                    intervalId = setInterval(function() {
                      const randomLetter = grlK();
                      k.textContent = randomLetter;
                    }, 200);

                    setTimeout(function() {
                      clearInterval(intervalId);
                      k.textContent = 'K';
                    }, duration);
                  }
    displayRandomLettersFor15mS();

  function grlE() {
    const possibleCe = '333EE0101EFORSOFTWARE';
    const randomIndex = Math.floor(Math.random() * possibleCe.length);
    return possibleCe.charAt(randomIndex);
  }
  const e = document.getElementById('e');
  function displayRandomLettersFor2S() {
    let intervalId;
    const duration = 2100; 

    intervalId = setInterval(function() {
      const randomLetter = grlE();
      e.textContent = randomLetter;
    }, 300);

    setTimeout(function() {
      clearInterval(intervalId);
      e.textContent = 'E',

      function grlE() {}
      const d = document.getElementById('d');
      function displayRandomLettersFor1Seconds() {
        let intervaloD;
        const duration = 1500; 

        intervaloD = setInterval(function() {
          const randomLetter = grlE();
          d.textContent = randomLetter;
        }, 200);

        setTimeout(function() {
          clearInterval(intervaloD);
          d.textContent = 'D';
        }, duration);
      }
      displayRandomLettersFor1Seconds();

    }, duration);
  }
  displayRandomLettersFor2S();



 const fadeText = document.getElementById('fadeout');

  setTimeout(() => {
  fadeText.style.opacity = fadeText.style.opacity-0.6;
  setTimeout(() => {
  fadeText.style.display="none";
 }, 2300);
 }, 4500);


let textDisplayed = false;

      function displayTextOnce() {
          if (!textDisplayed) {
              const messageElement = document.getElementById('fadeout');
              messageElement.style.display = 'flex';
              textDisplayed = true;
          }
      }

      window.onload = displayTextOnce;