#CC:=arm-linux-gcc
CC:=gcc

TARGET_SRV=iot_server
OBJECT_SRV=$(TARGET_SRV).o 

TARGET_CLN=iot_client
OBJECT_CLN=$(TARGET_CLN).o 

#LDFLAGS=-D_REENTRANT -pthread -lmysqlclient
LDFLAGS=-D_REENTRANT -pthread -L/usr/lib  -lmysqlclient

# MySQL 헤더 파일의 경로 추가
CFLAGS = -I/usr/include/

all : $(TARGET_SRV) $(TARGET_CLN)

$(TARGET_SRV):$(OBJECT_SRV)
	$(CC) -o $@ $(OBJECT_SRV) $(LDFLAGS)
$(TARGET_CLN):$(OBJECT_CLN)
	$(CC) -o $@ $(OBJECT_CLN) $(LDFLAGS)
%.o:%.c
	$(CC) -c -o $@ $< $(CFLAGS)
clean:
	rm -f *.o $(TARGET_SRV) $(TARGET_CLN)
