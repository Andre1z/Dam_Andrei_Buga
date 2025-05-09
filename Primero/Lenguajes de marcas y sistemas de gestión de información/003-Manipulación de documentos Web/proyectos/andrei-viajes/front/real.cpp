#include <iostream>
#include <thread>
#include <chrono>

void fetchRealTimeData() {
    while (true) {
        std::cout << "Fetching real-time data..." << std::endl;
        std::this_thread::sleep_for(std::chrono::seconds(5));
    }
}

int main() {
    std::thread dataThread(fetchRealTimeData);
    dataThread.join();
    return 0;
}