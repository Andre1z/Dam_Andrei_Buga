from rich.progress import Progress
import time


with Progress() as progress:
    task = progress.add_task("[cyan]Descargando...", total=100)
    while not progress.finished:
        progress.update(task, advance=10)
        time.sleep(0.2)
