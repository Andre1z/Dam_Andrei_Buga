import qrcode

qr = qrcode.QRCode(
    version=1,
    error_correction=qrcode.constants.ERROR_CORRECT_L,
    box_size=10,
    border=4,
)
qr.add_data('https://twitch.tv/andre1z')
qr.make(fit=True)

img = qr.make_image(fill_color="black", back_color="white")
