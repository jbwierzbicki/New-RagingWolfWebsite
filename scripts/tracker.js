requirejs(["jsforce"], function (jsforce) {

    var conn = new jsforce.Connection();
    conn.login('mike@raging.wolf', 'alpha@pack1', function (err, res) {
        if (err) {
            return console.error(err);
        }
        conn.query('SELECT Id, Name FROM Account', function (err, res) {
            if (err) {
                return console.error(err);
            }
            console.log(res);
        });
    });
});




/* jsforce.browser.init({
    clientId: '3MVG9qgknsCC05RwYOhoVdhaQzN.MNiE8S1Qavfbajcu4c1DmbcjQNWjKLmbSBeoVUrQHzsbXW6SdcIMtl.CR',
    redirectUri: 'https://login.salesforce.com/services/oauth2/callback'
  });
  
  
  
              var jsforce = require('jsforce');
            var conn = new jsforce.Connection();
            conn.login('mike@raging.wolf', 'alpha@pack1', function (err, res) {
                if (err) {
                    return console.error(err);
                }
                conn.query('SELECT Id, Name FROM Account', function (err, res) {
                    if (err) {
                        return console.error(err);
                    }
                    console.log(res);
                });
            });
  
  */
// ...