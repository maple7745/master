from sqlite3 import Cursor
from venv import create
import mysql.connector
from mysql.connector import Error
connection = mysql.connector.connect(host='localhost',
                                    port='3306',
                                    user='root',
                                    password='maple0911407181')

cursor = connection.cursor()


#創建表格
#cursor.execute("CREATE DATABASE `aa`;")

#迴圈顯示表格
# cursor.execute("SHOW DATABASES;")
# records = cursor.fetchall()
# for r in records:
#     print(r)




cursor.close()
connection.close()