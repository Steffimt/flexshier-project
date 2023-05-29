<!DOCTYPE html>
<html>
    <body>
        <div class = "QRScan" id="reader" width="600px" >
            <script src="https://unpkg.com/html5-qrcode" type="text/javascript"> </script>
            <script>
            function onScanSuccess(decodedText, decodedResult) {
                console.log(`Code matched = ${decodedText}`, decodedResult);
            }
            
            function onScanFailure(error) {
            console.warn(`Code scan error = ${error}`);
            }

            let qrboxFunction = function(viewfinderWidth, viewfinderHeight) {
            let minEdgePercentage = 0.7; // 70%
            let minEdgeSize = Math.min(viewfinderWidth, viewfinderHeight);
            let qrboxSize = Math.floor(minEdgeSize * minEdgePercentage);
            return {
                width: qrboxSize,
                height: qrboxSize
                };
            }
            
            let html5QrcodeScanner = new Html5QrcodeScanner(
                "reader",
                { fps: 10, qrbox: {width: 250, height: 250} },
                /* verbose= */ false);
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
            </script>
        </div>
            <div class="navigation-bar">
                <div class="nb-home">
                    <li><a href= "/"><img class="icon-nb-home" src="{{ URL::to('/assets/img/Home.svg') }}"></a></li>
                </div>
                <div class="nb-cart">
                    <li><a href="/cartview"><img class="icon-nb-cart" src="{{ URL::to('/assets/img/Cart.svg') }}"></a></li>
                </div>
                <div class="nb-scan">
                    <li><a href="/scanner"><img class="icon-nb-scan" src="{{ URL::to('/assets/img/Scan.svg') }}"></a></li>
                </div>
                <div class="nb-history">
                    <li><a href="/history"><img class="icon-nb-history" src="{{ URL::to('/assets/img/History.svg') }}"></a></li>
                </div>
                <div class="nb-profile">
                    <li><a href="payment-type.html"></li><img class="icon-nb-profile" src="{{ URL::to('/assets/img/Profile.svg') }}"></a></li>
            </div>
        </div>

        <script src="script.js"></script>

        </body>
<style>
.QRScan {
    position: fixed;
    align-items: center;
}
    
.navigation-bar {
  position: fixed;
  width: 100%;
  height: 80px;
  left: 0px;
  bottom: 0px;
  padding-bottom: 10px;
  display: flex;
  align-items: center;
  flex-direction: row;
  justify-content: center;
  gap: 10%;
  background: #226F54;
}

.navigation-bar li {
  list-style: none;
}

.icon-nb-scan {
  transform: translate(-36px, -70px);
  position: absolute;
  padding: 10px;
  background: #226F54;
  border: 10px solid white;
  border-radius: 100%;
}