dmx.config({
  "index": {
    "form1": [
      {
        "type": "object",
        "name": "data",
        "sub": [
          {
            "type": "text",
            "name": "customeremailc"
          },
          {
            "type": "text",
            "name": "customernamec"
          },
          {
            "type": "text",
            "name": "pickuplocationc"
          },
          {
            "type": "text",
            "name": "pickuptimec"
          },
          {
            "type": "text",
            "name": "deliverylocationc"
          },
          {
            "type": "text",
            "name": "deliverytimec"
          },
          {
            "type": "text",
            "name": "commoditydetailsc"
          },
          {
            "type": "text",
            "name": "additionalnotesc"
          }
        ]
      },
      {
        "type": "object",
        "name": "headers"
      }
    ],
    "trackingapi": [
      {
        "type": "array",
        "name": "data",
        "sub": [
          {
            "type": "object",
            "name": "attributes",
            "sub": [
              {
                "type": "text",
                "name": "type"
              },
              {
                "type": "text",
                "name": "url"
              }
            ]
          },
          {
            "type": "text",
            "name": "Carrier_Name__c"
          },
          {
            "type": "text",
            "name": "Name"
          },
          {
            "type": "text",
            "name": "Load_Reference__c"
          },
          {
            "type": "text",
            "name": "Customer_Name__c"
          },
          {
            "type": "number",
            "name": "Total_Customer_Amount__c"
          },
          {
            "type": "text",
            "name": "FreightTM__Carrier_Obj__c"
          },
          {
            "type": "number",
            "name": "Total_Carrier_Amount__c"
          },
          {
            "type": "text",
            "name": "CreatedDate"
          },
          {
            "type": "text",
            "name": "FreightTM__Status__c"
          },
          {
            "type": "text",
            "name": "Pickup_Arrival_Date__c"
          },
          {
            "type": "text",
            "name": "FreightTM__Pickup_Address__c"
          },
          {
            "type": "text",
            "name": "FreightTM__Delivery_Address__c"
          },
          {
            "type": "text",
            "name": "Delivery_Arrival_Date__c"
          },
          {
            "type": "text",
            "name": "Id"
          }
        ]
      },
      {
        "type": "object",
        "name": "headers",
        "sub": [
          {
            "type": "text",
            "name": "date"
          },
          {
            "type": "text",
            "name": "cache-control"
          },
          {
            "type": "text",
            "name": "vary"
          },
          {
            "type": "text",
            "name": "strict-transport-security"
          },
          {
            "type": "text",
            "name": "content-encoding"
          },
          {
            "type": "text",
            "name": "transfer-encoding"
          },
          {
            "type": "text",
            "name": "content-type"
          }
        ]
      }
    ]
  },
  "alphatrackTEST": {
    "api2": [
      {
        "type": "array",
        "name": "data",
        "sub": [
          {
            "type": "object",
            "name": "attributes",
            "sub": [
              {
                "type": "text",
                "name": "type"
              },
              {
                "type": "text",
                "name": "url"
              }
            ]
          },
          {
            "type": "text",
            "name": "Load_Reference__c"
          },
          {
            "type": "text",
            "name": "Delivery_Arrival_Date__c"
          },
          {
            "type": "text",
            "name": "FreightTM__Delivery_City__c"
          },
          {
            "type": "text",
            "name": "FreightTM__Delivery_State__c"
          },
          {
            "type": "text",
            "name": "FreightTM__Pickup_City__c"
          },
          {
            "type": "text",
            "name": "FreightTM__Pickup_State__c"
          },
          {
            "type": "text",
            "name": "FreightTM__Status__c"
          },
          {
            "type": "text",
            "name": "Pickup_Arrival_Date__c"
          },
          {
            "type": "text",
            "name": "Id"
          }
        ]
      },
      {
        "type": "object",
        "name": "headers",
        "sub": [
          {
            "type": "text",
            "name": "date"
          },
          {
            "type": "text",
            "name": "cache-control"
          },
          {
            "type": "text",
            "name": "vary"
          },
          {
            "type": "text",
            "name": "strict-transport-security"
          },
          {
            "type": "text",
            "name": "content-encoding"
          },
          {
            "type": "text",
            "name": "transfer-encoding"
          },
          {
            "type": "text",
            "name": "content-type"
          }
        ]
      }
    ]
  }
});
