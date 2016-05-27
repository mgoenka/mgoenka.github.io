#Script to Connect & get data from DB
import sys
import mysql.connector
from mysql.connector import errorcode

login_config = {
  'user': 'root',
  'password': 'root',
  'host': '127.0.0.1',
  'database': 'authenticator',
  'raise_on_warnings': True,
}


def getData(queryString):
    print 'getData SQL: ', queryString
    result = []

    try:
        queryStr = queryString
        cnx = mysql.connector.connect(**login_config)
        cursor = cnx.cursor()
        cursor.execute(queryStr)
        if "INSERT INTO" in queryString:
            cnx.commit()
        else:
            columns = tuple( d[0].decode('utf8') for d in cursor.description )
            for row in cursor:
                result.append(dict(zip(columns,row)))
        # print result
        # print getData(query)
    except mysql.connector.Error as err:
      if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
        print("Something is wrong with your user name or password")
      elif err.errno == errorcode.ER_BAD_DB_ERROR:
        print("Database does not exists")
      else:
        print(err)
    else:
      cnx.close()
    return result