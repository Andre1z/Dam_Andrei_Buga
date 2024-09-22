import speedtest as st


def Speed_Test():
    test = st.Speedtest()


    down_speed = test.download()
    down_speed = round(down_speed / 10**6, 2)
    print("Velocidad de Descarga en Mbps:", down_speed)


    up_speed = test.upload()
    up_speed = round(down_speed / 10**6, 2)
    print("Velocidad de Subida en Mbps:", up_speed)


    ping = test.results.ping
    print("Ping:", ping)
Speed_Test()
